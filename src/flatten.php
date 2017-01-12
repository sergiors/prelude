<?php

namespace Prelude;

const flatten = __NAMESPACE__.'\flatten';

function flatten(array $xss)
{
    return array_reduce($xss, function (array $prev, $x) {
        return is_array($x)
            ? array_merge($prev, flatten($x))
            : array_merge($prev, [$x]);
    }, []);
}
