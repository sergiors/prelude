<?php

declare(strict_types=1);

namespace Prelude;

const reduce = __NAMESPACE__.'\reduce';

use Closure;

function reduce(callable $callback): Closure
{
    return function (array $xss, $initial = null) use ($callback) {
        return array_reduce($xss, $callback, $initial);
    };
}
