<?php

namespace Prelude;

use function Prelude\tail;

const pipe = '\pipe';

/**
 * Performs left-to-right function composition.
 * The leftmost function may have any arity; the remaining functions must be unary.
 */
function pipe(callable ...$callbacks): \Closure
{
    return function ($payload = null, ...$rest) use ($callbacks) {
        $leftmost = function ($payload) use ($rest, $callbacks) {
            return $callbacks[0](
                ...\array_merge([$payload], $rest)
            );
        };

        return \array_reduce(
            [] === $rest
                ? $callbacks
                : \array_merge([$leftmost], tail($callbacks)),
            function ($payload, callable $callback) {
                return $callback($payload);
            },
            $payload
        );
    };
}
