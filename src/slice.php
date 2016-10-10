<?php

namespace Prelude;

const slice = __NAMESPACE__.'\slice';

function slice(...$args)
{
    $fn = partial('array_slice');
    return $fn(...$args);
}
