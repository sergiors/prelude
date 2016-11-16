<?php

namespace Prelude;

const flatten = __NAMESPACE__.'\flatten';

function flatten(array $xss)
{
    return array_reduce($xss, function (array $carry, $x) {
        $fn = ifElse(isArray, function ($x) use ($carry) {
            return array_merge($carry, flatten($x));
        }, function ($x) use ($carry) {
            return array_merge($carry, [$x]);
        });

        return $fn($x);
    }, []);
}
