<?php

namespace Prelude;

const join = __NAMESPACE__.'\join';

/**
 * Just an alias.
 */
function join(...$args)
{
    $join = partial('join');
    return $join(...$args);
}
