<?php

declare(strict_types=1);

namespace Prelude;

const partial = __NAMESPACE__.'\partial';

function partial(callable $callback, ...$args)
{
    $arity = (new \ReflectionFunction($callback))->getNumberOfRequiredParameters();

    return $args[$arity - 1] ?? false
        ? $callback(...$args)
        : function (...$rest) use ($callback, $args) {
            return partial($callback, ...\array_merge($args, $rest));
        };
}
