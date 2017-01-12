<?php

declare(strict_types = 1);

namespace Prelude;

const equals = __NAMESPACE__.'\equals';

function equals($x)
{
    return function ($y) use ($x) {
        return $x === $y;
    };
}
