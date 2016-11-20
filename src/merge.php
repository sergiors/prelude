<?php

namespace Prelude;

const merge = __NAMESPACE__.'\merge';

/**
 * Just an alias.
 */
function merge(...$args)
{
    $merge = partial('array_merge');
    return $merge(...$args);
}
