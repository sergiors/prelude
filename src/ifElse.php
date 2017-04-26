<?php

declare(strict_types = 1);

namespace Prelude;

const ifElse = __NAMESPACE__.'\ifElse';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#if-and-unless
 */
function ifElse(callable $pred): \Closure
{
    return function (callable $succfn) use ($pred): \Closure {
        return function (callable $failfn) use ($pred, $succfn): \Closure {
            return function ($x = null) use ($pred, $succfn, $failfn) {
                return $pred($x)
                    ? $succfn($x)
                    : $failfn($x);
            };
        };
    };
}
