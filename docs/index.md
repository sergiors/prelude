# API
All functions is unitary, exception when the second argument is optional. It has constants to help you to work with point-free style.

+ [`all()`](#all)
+ [`allPass()`](#allpass)
+ [`always()`](#always)
+ [`any()`](#any)
+ [`anyPass()`](#anypass)
+ [`append()`](#append)
+ [`contains()`](#contains)
+ compose()
+ cond()
+ divide()
+ drop()
+ equals()
+ filter()
+ find()
+ flatten()
+ gt()
+ gte()
+ has()
+ head()
+ id()
+ ifElse()
+ isEmpty()
+ indexOf()
+ init()
+ join()
+ last()
+ lt()
+ lte()
+ map()
+ memoize()
+ merge()
+ multiply()
+ none()
+ not()
+ partial()
+ pipe()
+ prepend()
+ prop()
+ props()
+ reduce()
+ replace()
+ slice()
+ split()
+ tail()
+ take()
+ toString()
+ typeof()
+ unless()
+ when()

#### Constants from native functions

+ keys 
+ values
+ flip 
+ sum
+ isNull
+ isInt
+ isFloat
+ isNumeric
+ isString
+ isBool
+ isScalar
+ isArray
+ isObject
+ isCallable

-------

### `all()`

```php
function all(callable $pred): \Closure;
```

`function => closure([array]) => boolean`

```php
use const Prelude\isScalar;
use function Prelude\all;

class AllTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $even = function ($n) { return $n % 2 === 0; };
        
        $this->assertTrue(all($even)([2, 4, 6, 8, 10, 12]));
        $this->assertTrue(all(isScalar)([1, 2, 3, 4]));
        $this->assertFalse(all(isScalar)([1, 2, [], 4]));
    }
}
```

### `allPass()`

 ```php
 function allPass(array $preds): \Closure;
 ```

 function => closure => boolean

 ```php
use function Prelude\partial;
use function Prelude\allPass;
use function Prelude\get;
use function Prelude\has;

class AllPassTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $placeholders = [
            'to' => 'xxx@xxx.com',
            'from' => 'xxx@xxx.com'
        ];

        $propEq = partial(function ($k, $v, array $xss) {
            return ($xss[$k] ?? false) === $v;
        });

        $y = allPass([has('from'), has('to')]);        
        $this->assertTrue($y($placeholders));

        $x = allPass([$propEq('rank', 'Q'), $propEq('suit', '♠︎')]);
        $this->assertTrue($x(['rank' => 'Q', 'suit' => '♠︎']));
        $this->assertFalse($x(['rank' => 'Q', 'suit' => '♣︎︎']));
    }
}
```

### `always()`

```php
function always($x): \Closure
{
    return function () use ($x) {
        return $x;
    };
}
```

### `any()`

```php
function any(callable $pred): \Closure;
```

`function => closure([array]) => boolean`

```php
use function Prelude\any;

class AnyTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $isEven = function ($n) { return $n % 2 === 0; };
        $isOdd = function ($n) { return $n % 2 === 1; };

        $this->assertTrue(any($isEven)([1, 3, 4, 5, 7]));
        $this->assertFalse(any($isEven)([1, 3, 5, 7]));

        $this->assertTrue(any($isOdd)([1, 3, 5, 7]));
        $this->assertFalse(any($isOdd)([2, 4, 6]));

        $this->assertTrue(any('is_array')([2, []]));
        $this->assertFalse(any('is_array')(['s', 'x']));
    }
}
```

### `anyPass()`

```php
function anyPass(array $preds): \Closure;
```
[array] => closure(callable) => boolean

```php
use function Prelude\anyPass;
use function Prelude\partial;
use function Prelude\equals;
use function Prelude\has;

class AnyPassTest extends \PHPUnit\Framework\TestCase
{

    public function shouldPass()
    {
        $gt = partial(function ($a, $b) { return $a > $b; });
        $gte = anyPass([$gt(3), equals(3)]);

        $this->assertTrue($gte(2));
        $this->assertTrue($gte(3));
        $this->assertFalse($gte(4));

        $has = anyPass([has('user'), has('mobile')]);
        $this->assertTrue($has(['user' => '']));
        $this->assertTrue($has(['mobile' => '']));
        $this->assertFalse($has([]));
    }
}
```

### `append()`

```php
function append($x): \Closure;
```

`any => closure([array]) => [array]`

```php
use function Prelude\append;

class AppendTest extends \PHPUnit\Framework\TestCase
{

    public function shouldReturnAppened()
    {
        $this->assertEquals(append('tests')(['write', 'more']), ['write', 'more', 'tests']);

        $append = append(['tests']);
        $this->assertEquals($append(['write', 'more']), ['write', 'more', ['tests']]);
    }
}
```

### `contains()`

```php
function contains($x): \Closure;
```

`any => closure([array]) => bool`

```php
use function Prelude\Contains;

class ContainsText extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $ls = ['name' => 'James'];
        $this->assertTrue(contains('James')($ls));
        $this->assertFalse(contains('Kirk')($ls));

        $nums = [10, 20, 30];
        $this->assertTrue(contains(10)($nums));
    }
}
```