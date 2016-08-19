<?php

namespace Prelude;

const ifElse = __NAMESPACE__.'\ifElse';

function ifElse(...$args)
{
    return partial(function (callable $pred, callable $success, callable $fail) {
        return function ($value) use ($pred, $success, $fail) {
            return $pred($value)
                ? $success($value)
                : $fail($value);
        };
    })(...$args);
}
