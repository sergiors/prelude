# API
All functions are unitaries, exception when the second argument is optional. It has constants to help you to work with point-free style.

+ [`all()`](#all)
+ [`allPass()`](#allpass)
+ [`always()`](#always)
+ [`any()`](#any)
+ [`anyPass()`](#anypass)
+ [`append()`](#append)
+ [`contains()`](#contains)
+ [`compose()`](#compose)
+ [`cond()`](#cond)
+ [`divide()`](#divide)
+ [`drop()`](#drop)
+ [`equals()`](#equals)
+ [`filter()`](#filter)
+ [`find()`](#find)
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

$even = function ($n) {
    return $n % 2 === 0;
};

all($even)([2, 4, 6, 8, 10, 12]); // => true
all(isScalar)([1, 2, 3, 4]); // => true
all(isScalar)([1, 2, [], 4]); // => false
```

### `allPass()`

 ```php
 function allPass(array $preds): \Closure;
 ```

`function => closure => boolean`

 ```php
use function Prelude\partial;
use function Prelude\allPass;
use function Prelude\get;
use function Prelude\has;

$placeholders = [
    'to' => 'xxx@xxx.com',
    'from' => 'xxx@xxx.com'
];

$propEq = partial(function ($k, $v, array $xss) {
    return ($xss[$k] ?? false) === $v;
});

$y = allPass([has('from'), has('to')]);        
$y($placeholders); // => true

$x = allPass([$propEq('rank', 'Q'), $propEq('suit', '♠︎')]);

$x(['rank' => 'Q', 'suit' => '♠︎']); // => true
$x(['rank' => 'Q', 'suit' => '♣︎︎']); // => false
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

$isEven = function ($n) { return $n % 2 === 0; };
$isOdd = function ($n) { return $n % 2 === 1; };

any($isEven)([1, 3, 4, 5, 7]); // => true
any($isEven)([1, 3, 5, 7]); // => false

any($isOdd)([1, 3, 5, 7]); // => true
any($isOdd)([2, 4, 6]); // => false

any('is_array')([2, []]); // => true
any('is_array')(['s', 'x']); // => false
```

### `anyPass()`

```php
function anyPass(array $preds): \Closure;
```

`[array] => closure(callable) => boolean`

```php
use function Prelude\anyPass;
use function Prelude\partial;
use function Prelude\equals;
use function Prelude\has;

$gt = partial(function ($a, $b) { return $a > $b; });
$gte = anyPass([$gt(3), equals(3)]);

$gte(2); // => true
$gte(3); // => true
$gte(4); // => false

$has = anyPass([has('user'), has('mobile')]);
$has(['user' => '']); // => true
$has(['mobile' => '']); // => true
$has([]); // => false

```

### `append()`

```php
function append($x): \Closure;
```

`any => closure([array]) => [array]`

```php
use function Prelude\append;

append('tests')(['write', 'more']); // => ['write', 'more', 'tests']

$append = append(['tests']);
$append(['write', 'more']); // => ['write', 'more', ['tests']]
```

### `contains()`

```php
function contains($x): \Closure;
```

`any => closure([array]) => bool`

```php
use function Prelude\Contains;

$ls = ['name' => 'James'];
contains('James')($ls); // => true
contains('Kirk')($ls); // => false

$nums = [10, 20, 30];
contains(10)($nums); // => true    
```

### `compose()`

```php
function compose(callable ...$callbacks): \Closure;
```

```php
use function Prelude\compose;

$compose = compose(
    function ($x) {
        return "foo($x)";
    },
    function ($x) {
        return "bar($x)";
    },
    function ($x) {
        return "baz($x)";
    }
);

$compose('x'); // => foo(bar(baz(x)))
```

### `cond()`

```php
function cond(array $pairs): \Closure;
```

```php
use const Prelude\id;
use function Prelude\cond;
use function Prelude\equals;
use function Prelude\always;

$fn = cond([
    [equals(0), always('water freezes at 0°C')],
    [equals(100), always('water boils at 100°C')],
    [always(true), function ($temp) {
        return 'nothing special happens at '.$temp.'°C';
    }]
]);

$fn(0); // => 'water freezes at 0°C'
$fn(50); // => 'nothing special happens at 50°C'
$fn(100); // => 'water boils at 100°C'
```

```php
$fn = cond([
    [equals([]), always(true)]
]);

$fn(true); // => \Prelude\Exception\CondClauseException
```

### `divide()`

```php
function divide($x): \Closure;
```

```php
use function Prelude\divide;

divide(10)(10); // => 1
divide(7)(2); // => 3.5
```

### `drop()`

```php
function drop(int $n): \Closure;
```

```php
use function Prelude\drop;

drop(3)([1, 2, 3, 4, 5]); // => [4, 5]
drop(5)([1, 2, 3, 4, 5]); // => []
```

### `equals()`

```php
function equals($x): \Closure;
```

```php
use function Prelude\equals;

equals(true)(true); // => true
equals(1)(1); // => true
equals("1")(1); // => false
equals("true")(true); // => false

$isTrue = equals(true);
$isTrue(true); // => true
$isTrue(false); // => false
```

### `filter()`

```php
function filter(callable $callback): \Closure;
```

```php
use function Prelude\filter;
use function Prelude\equals;

$names = ['James' => true, 'Kirk' => false];

$istrue = filter(equals(true));

$istrue($names); // => ['James' => true]
```

### `find()`

```php
function find(callable $callback): \Closure;
```

```php
use function Prelude\find;

$values = [100, 200, 300, 400];

$isGreaterThan200 = function (int $n) { return $n > 200; };

find($isGreaterThan200)($values); // => 300
```
