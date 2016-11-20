<?php

namespace Prelude;

const ifElse = __NAMESPACE__.'\ifElse';

function ifElse(...$args)
{
    $ifElse = partial(function (callable $pred, callable $success, callable $fail) {
        return function ($value = null) use ($pred, $success, $fail) {
            return $pred($value)
                ? $success($value)
                : $fail($value);
        };
    });

    return $ifElse(...$args);
}
