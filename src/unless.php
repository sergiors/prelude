<?php

declare(strict_types = 1);

namespace Prelude;

const unless = __NAMESPACE__.'\unless';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#if-and-unless
 */
function unless(callable $pred): \Closure
{
    return function (callable $failfn) use ($pred): \Closure {
        return function ($x) use ($pred, $failfn) {
            return $pred($x)
                ? $x
                : $failfn($x);
        };
    };
}
