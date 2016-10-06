<?php

namespace Prelude;

const partial = __NAMESPACE__.'\partial';

function partial(callable $fn, ...$args)
{
    $arity = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return isset($args[$arity - 1])
        ? $fn(...$args)
        : function (...$restArgs) use ($fn, $args) {
            return partial($fn, ...array_merge($args, $restArgs));
        };
}
