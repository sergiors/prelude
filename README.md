Prelude
-------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/b/sergiors/prelude/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/b/sergiors/prelude/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/b/sergiors/prelude/badges/coverage.png?b=master)](https://scrutinizer-ci.com/b/sergiors/prelude/?branch=master)
[![Build Status](https://scrutinizer-ci.com/b/sergiors/prelude/badges/build.png?b=master)](https://scrutinizer-ci.com/b/sergiors/prelude/build-status/master)

Install
-------

`composer require prelude/prelude "dev-master"`

```
"repositories": [
    {
        "type": "vcs",
        "url":  "git@bitbucket.org:sergiors/prelude.git"
    }
]
```

API
---
All functions are automatically applied partial application and have constant to help to work with point-free style.

```
allPass()
always()
anyPasss()
equals()
filter()
flatten()
get()
getIn()
has()
head()
id()
ifElse()
join()
map()
maybe()
not()
partial()
pipe()
placeholder()
reduce()
replace()
slice()
tail()
typeof()
```

Thanks
------
[Marcelo Camargo](https://github.com/haskellcamargo)

License
-------
MIT
