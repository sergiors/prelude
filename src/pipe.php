<?php

namespace Prelude;

const pipe = '\pipe';

/**
 * Performs left-to-right function composition.
 * The leftmost function may have any arity; the remaining functions must be unary.
 */
function pipe(callable ...$callbacks)
{
    return function ($payload) use ($callbacks) {
        $rest = tail(func_get_args());

        return array_reduce($callbacks, function ($payload, $callback) use ($rest) {
            return $callback(...array_merge([$payload], $rest));
        }, $payload);
    };
}
