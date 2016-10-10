<?php

namespace Prelude;

const map = __NAMESPACE__.'\map';

function map(...$args)
{
    $fn =  partial('array_map');
    return $fn(...$args);
}
