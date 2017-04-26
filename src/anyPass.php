<?php

declare(strict_types = 1);

namespace Prelude;

const anyPass = __NAMESPACE__.'\anyPass';

function anyPass(array $preds): \Closure
{
    return function ($x) use ($preds): bool {
        return array_reduce($preds, function (bool $prev, callable $pred) use ($x) {
            return true === $prev
                ? $prev
                : $pred($x);
        }, false);
    };
}
