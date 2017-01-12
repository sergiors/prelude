<?php

namespace Prelude;

const multiply = __NAMESPACE__.'\multiply';

function multiply($x)
{
    return function ($y) use ($x) {
        return $x * $y;
    };
}
