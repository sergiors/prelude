<?php

namespace Prelude;

const replace = __NAMESPACE__.'\replace';

function replace(...$args)
{
    $fn = partial('array_replace');
    return $fn(...$args);
}
