<?php

namespace Prelude;

const ifElse = __NAMESPACE__.'\ifElse';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#if-and-unless
 */
function ifElse(...$args)
{
    $ifElse = partial(function (callable $pred, callable $success, callable $fail) {
        return function ($x = null) use ($pred, $success, $fail) {
            return $pred($x)
                ? $success($x)
                : $fail($x);
        };
    });

    return $ifElse(...$args);
}
