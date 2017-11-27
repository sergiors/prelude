<?php

declare(strict_types=1);

namespace Prelude;

const anyPass = __NAMESPACE__.'\anyPass';

function anyPass(array $preds): \Closure
{
    return function (...$args) use ($preds): bool {
        return array_reduce($preds, function (bool $prev, callable $pred) use ($args) {
            return true === $prev
                ? $prev
                : $pred(...$args);
        }, false);
    };
}
