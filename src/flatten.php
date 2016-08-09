<?php

namespace Prelude;

const flatten = __NAMESPACE__.'\flatten';

function flatten(array $xss)
{
    return array_reduce($xss, function (array $carry, $x) {
        return is_array($x)
            ? array_merge($carry, flatten($x))
            : array_merge($carry, [$x]);
    }, []);
}
