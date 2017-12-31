<?php

declare(strict_types=1);

namespace Prelude;

const anyPass = __NAMESPACE__.'\anyPass';

use Closure;

function anyPass(array $preds): Closure
{
    return function (...$args) use ($preds): bool {
        return array_reduce($preds, function (bool $prev, callable $pred) use ($args): bool {
            return $prev ?: $pred(...$args);
        }, false);
    };
}
