Prelude
-------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sergiors/prelude/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sergiors/prelude/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/sergiors/prelude/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/sergiors/prelude/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/sergiors/prelude/badges/build.png?b=master)](https://scrutinizer-ci.com/g/sergiors/prelude/build-status/master)

Install
-------

`composer require prelude/prelude "dev-master"`

```
"repositories": [
    {
        "type": "vcs",
        "url":  "git@github.com:sergiors/prelude.git"
    }
]
```

How to use
----------
```php
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

echo $fn(0); // => water freezes at 0°C
echo $fn(50); // => nothing special happens at 50°C
echo $fn(100); // => water boils at 100°C
```

```php
use function Prelude\has;

$hasName = has('name');
echo $hasName(['name' => 'Jimi']); // => true
echo $hasName([]); // => false
```

```php
use const Prelude\id;
use const Prelude\isEmpty;
use function Prelude\ifElse;
use function Prelude\always;

$fn = ifElse(isEmpty, always(true), always(false));
echo $fn([]); // => true
echo $fn(null); // => true
echo $fn(false); // => true
echo $fn('James'); // => false
```

```php
use function Prelude\head;

echo head([1, 2, 3]); // => 1
```

```php
use function Prelude\tail;

echo tail([1, 2, 3]); // => [2, 3]
```

API
---
All functions are automatically applied partial application and have constant to help to work with point-free style.

```
allPass()
always()
anyPass()
append()
apply()
compose()
cond()
divide()
equals()
filter()
find()
flatten()
get()
getIn()
gt()
gte()
has()
head()
id()
ifElse()
indexOf()
isEmpty()
join()
lt()
lte()
map()
maybe()
merge()
multiply()
not()
partial()
pipe()
placeholder()
prepend()
reduce()
replace()
slice()
split()
tail()
toString()
typeof()
unless()
when()
```

#### Constants from native functions

```
keys 
values
flip 
sum
isNull
isInt
isFloat
isNumeric
isString
isBool
isScalar
isArray
isObject
isCallable
```

Thanks
------
[Marcelo Camargo](https://github.com/haskellcamargo)

License
-------
MIT
