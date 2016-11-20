<?php

namespace Prelude;

const map = __NAMESPACE__.'\map';

/**
 * Just an alias.
 */
function map(...$args)
{
    $map =  partial('array_map');
    return $map(...$args);
}
