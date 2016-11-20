<?php

namespace Prelude;

const slice = __NAMESPACE__.'\slice';

/**
 * Just an alias.
 */
function slice(...$args)
{
    $slice = partial('array_slice');
    return $slice(...$args);
}
