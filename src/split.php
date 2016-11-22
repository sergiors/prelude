<?php

namespace Prelude;

const split = __NAMESPACE__.'\split';

/**
 * Just an alias.
 */
function split(...$args)
{
    $split = partial(function ($string, $separator, $limit = PHP_INT_MAX) {
        return explode($separator, $string, $limit);
    });
    return $split(...$args);
}
