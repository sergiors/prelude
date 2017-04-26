<?php

declare(strict_types = 1);

namespace Prelude;

const cond = __NAMESPACE__.'\cond';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#cond
 */
function cond(array $pairs): \Closure
{
    return function ($x) use ($pairs) {
        $pair = head($pairs);

        $lazyfn = function ($x) use ($pairs) {
            $xs = tail($pairs);
            return cond($xs)($x);
        };

        $throw = function() {
            throw new \InvalidArgumentException();
        };

        return ifElse($pair[0] ?? $throw())
            ($pair[1] ?? $throw())
            ($lazyfn)
            ($x);
    };
}
