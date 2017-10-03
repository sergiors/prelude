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

        $lazy = function ($x) use ($pairs) {
            return cond(tail($pairs))($x);
        };

        $throw = function() {
            throw new \InvalidArgumentException('Missing parameter.');
        };

        return ifElse($pair[0] ?? $throw())
            ($pair[1] ?? $throw())
            ($lazy)
            ($x);
    };
}
