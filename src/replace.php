<?php

namespace Prelude;

const replace = __NAMESPACE__.'\replace';

/**
 * Just an alias.
 */
function replace(...$args)
{
    $replace = partial('array_replace');
    return $replace(...$args);
}
