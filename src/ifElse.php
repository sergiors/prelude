<?php

declare(strict_types=1);

namespace Prelude;

const ifElse = __NAMESPACE__.'\ifElse';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#if-and-unless
 */
function ifElse(callable $if): \Closure
{
    return function (callable $then) use ($if): \Closure {
        return function (callable $else) use ($if, $then): \Closure {
            return function (...$args) use ($if, $then, $else) {
                return $if(...$args)
                    ? $then(...$args)
                    : $else(...$args);
            };
        };
    };
}
