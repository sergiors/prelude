<?php

declare(strict_types = 1);

namespace Prelude;

const multiply = __NAMESPACE__.'\multiply';

function multiply($x): \Closure
{
    return function ($y) use ($x) {
        return $x * $y;
    };
}
