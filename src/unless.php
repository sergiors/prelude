<?php

namespace Prelude;

const unless = __NAMESPACE__.'\unless';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#if-and-unless
 */
function unless(callable $pred)
{
    return function (callable $failfn) use ($pred) {
        return function ($x) use ($pred, $failfn) {
            return $pred($x)
                ? $x
                : $failfn($x);
        };
    };
}
