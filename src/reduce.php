<?php

declare(strict_types = 1);

namespace Prelude;

const reduce = __NAMESPACE__.'\reduce';

function reduce(callable $callback)
{
    return function (array $xss, $initial = null) use ($callable) {
        return array_reduce($xss, $callable, $initial);
    };
}
