<?php

namespace Prelude;

const unless = __NAMESPACE__.'\unless';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#if-and-unless
 */
function unless(...$args)
{
    $unless = partial(function (callable $pred, callable $fail, $x) {
        return $pred($x)
            ? $x
            : $fail($x);
    });

    return $unless(...$args);
}
