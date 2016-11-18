<?php

namespace Prelude;

const merge = __NAMESPACE__.'\merge';

function merge(...$args)
{
    $fn = partial('array_merge');
    return $fn(...$args);
}
