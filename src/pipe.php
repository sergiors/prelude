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
        $restArgs = tail(func_get_args());

        return array_reduce($callbacks, function ($payload, $callback) use ($restArgs) {
            return $callback(...prepend($payload, $restArgs));
        }, $payload);
    };
}
