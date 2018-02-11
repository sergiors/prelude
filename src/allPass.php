<?php

declare(strict_types=1);

namespace Prelude;

const allPass = __NAMESPACE__.'\allPass';

function allPass(array $preds): \Closure
{
    return function (...$args) use ($preds): bool {
        return \array_reduce($preds, function (bool $prev, callable $pred) use ($args): bool {
            return $prev && $pred(...$args);
        }, true);
    };
}
