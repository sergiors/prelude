<?php

declare(strict_types = 1);

namespace Prelude;

const get = __NAMESPACE__.'\get';

function get(array $xss): \Closure
{
    return function ($x, $notfound = false) use ($xss) {
        return $xss[$x] ?? $notfound;
    };
}
