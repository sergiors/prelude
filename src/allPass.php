<?php

namespace Prelude;

const allPass = __NAMESPACE__.'\allPass';

function allPass(array $preds)
{
    return function ($value) use ($preds) {
        return array_reduce($preds, function ($carry, callable $pred) use ($value) {
            return $carry && $pred($value);
        }, true);
    };
}
