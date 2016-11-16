<?php

namespace Prelude;

const anyPass = __NAMESPACE__.'\anyPass';

function anyPass(array $preds)
{
    return function ($value) use ($preds) {
        return array_reduce($preds, function ($carry, callable $pred) use ($value) {
            $fn = ifElse(equals(true), id, function () use ($pred, $value) {
                return $pred($value);
            });

            return $fn($carry);
        }, false);
    };
}
