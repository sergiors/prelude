<?php

namespace Prelude;

const pipe = '\pipe';

/**
 * Performs left-to-right function composition.
 * The leftmost function may have any arity; the remaining functions must be unary.
 */
function pipe(callable ...$callbacks)
{
    return function ($payload, ...$restParams) use ($callbacks) {
        return array_reduce($callbacks,
            function ($payload, callable $callback) use ($restParams) {
                return $callback(...array_merge([$payload], $restParams));
            }, $payload);
    };
}
