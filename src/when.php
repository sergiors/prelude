<?php

declare(strict_types=1);

namespace Prelude;

const when = __NAMESPACE__.'\when';

function when(callable $pred): \Closure
{
    return function (callable $callback) use ($pred): \Closure {
        return function ($x) use ($pred, $callback) {
            return $pred($x)
                ? $callback($x)
                : $x;
        };
    };
}
