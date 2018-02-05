Prelude
-------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sergiors/prelude/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sergiors/prelude/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/sergiors/prelude/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/sergiors/prelude/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/sergiors/prelude/badges/build.png?b=master)](https://scrutinizer-ci.com/g/sergiors/prelude/build-status/master)


Install
-------

`composer require sergiors/prelude "dev-master"`

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

$fn = ifElse(isEmpty)
    (always(true))
    (always(false));
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

[**Full API Documentation**](docs/index.md)

Thanks
------
[Marcelo Camargo](https://github.com/haskellcamargo)

License
-------
MIT
