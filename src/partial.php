<?php

declare(strict_types=1);

namespace Prelude;

const partial = __NAMESPACE__.'\partial';

function partial(callable $fn, ...$args)
{
    $arity = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return $args[$arity - 1] ?? false
        ? $fn(...$args)
        : function (...$restArgs) use ($fn, $args) {
            return partial($fn, ...array_merge($args, $restArgs));
        };
}
