<?php

namespace Prelude;

const indexOf = __NAMESPACE__.'\indexOf';

/**
 * Just an alias.
 */
function indexOf(...$args)
{
    $indexOf = partial('array_search');
    return $indexOf(...$args);
}
