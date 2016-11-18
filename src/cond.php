<?php

namespace Prelude;

const cond = __NAMESPACE__.'\cond';

function cond(array $pairs)
{
    return function ($value) use ($pairs) {
        $lazy = function ($value) use ($pairs) {
            $fn = cond(tail($pairs));
            return $fn($value);
        };

        $success = function (array $pair) use ($value, $lazy) {
            $fn = ifElse($pair[0], $pair[1], $lazy);
            return $fn($value);
        };

        $fn = ifElse(has(1), $success, [Raise::class, 'invalid']);
        return $fn(head($pairs));
    };
}
