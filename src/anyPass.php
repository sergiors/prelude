<?php

namespace Prelude;

const anyPass = __NAMESPACE__.'\anyPass';

function anyPass(array $preds)
{
    return function ($value) use ($preds) {
        return array_reduce($preds, function ($carry, callable $pred) use ($value) {
            return true === $carry
                ? $carry
                : $pred($value);
        }, false);
    };
}
