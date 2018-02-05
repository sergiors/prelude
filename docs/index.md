# API
All functions is unitary, exception when the second argument is optional. It has constants to help you to work with point-free style.

+ [`all()`](#all)
+ [`allPass()`](#allpass)
+ always()
+ any()
+ anyPass()
+ append()
+ contains()
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

### `all()`

```php
function all(callable $pred): \Closure;
```

function => closure => boolean

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