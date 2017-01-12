<?php

declare(strict_types = 1);

namespace Prelude;

const allPass = __NAMESPACE__.'\allPass';

function allPass(array $preds)
{
    return function ($x) use ($preds) {
        return array_reduce($preds, function (bool $prev, callable $pred) use ($x) {
            return $prev && $pred($x);
        }, true);
    };
}
