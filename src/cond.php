<?php

namespace Prelude;

const cond = __NAMESPACE__.'\cond';

function cond(array $pairs)
{
    return function ($value) use ($pairs) {
        $success = function (array $pair) use ($value, $pairs) {
            $fn = ifElse($pair[0], $pair[1], cond(tail($pairs)));
            return $fn($value);
        };

        $fn = ifElse(has(1), $success, [Raise::class, 'invalid']);
        return $fn(head($pairs));
    };
}
