<?php

declare(strict_types = 1);

namespace Prelude;

const cond = __NAMESPACE__.'\cond';

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#cond
 */
function cond(array $pairs)
{
    return function ($x) use ($pairs) {
        $pair = head($pairs);

        if (!isset($pair[1])) {
            throw new \InvalidArgumentException();
        }

        $lazyfn = function ($x) use ($pairs) {
            $xs = tail($pairs);
            return cond($xs)($x);
        };

        return ifElse($pair[0])
            ($pair[1])
            ($lazyfn)
            ($x);
    };
}
