<?php

namespace Prelude;

const partial = __NAMESPACE__.'\partial';

function partial(callable $fn, ...$args)
{
    $arity = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return function (...$moreArgs) use ($fn, $args, $arity) {
        $args = array_merge($args, $moreArgs);

        return isset($args[$arity - 1])
            ? $fn(...$args)
            : partial($fn, ...$args);
    };
}
