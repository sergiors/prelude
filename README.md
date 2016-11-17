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

API
---
All functions are automatically applied partial application and have constant to help to work with point-free style.

```
allPass()
always()
anyPass()
append()
divide()
equals()
filter()
find()
flatten()
get()
getIn()
gt()
has()
head()
id()
ifElse()
isEmpty()
join()
lt()
map()
maybe()
multiply()
not()
partial()
pipe()
placeholder()
prepend()
reduce()
replace()
slice()
tail()
toString()
typeof()
```

Thanks
------
[Marcelo Camargo](https://github.com/haskellcamargo)

License
-------
MIT
