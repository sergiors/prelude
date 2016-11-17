<?php

namespace Prelude;

const flatten = __NAMESPACE__.'\flatten';

function flatten(array $xss)
{
    return reduce(function (array $carry, $x) {
        $fn = ifElse(isArray, function ($x) use ($carry) {
            return array_merge($carry, flatten($x));
        }, placeholder(append, _, $carry));

        return $fn($x);
    }, $xss, []);
}
