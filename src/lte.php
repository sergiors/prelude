<?php

namespace Prelude;

const lte = __NAMESPACE__.'\lte';

function lte($x)
{
    return function ($y) use ($x) {
        return $x <= $y;
    };
}
