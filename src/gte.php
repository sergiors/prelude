<?php

declare(strict_types = 1);

namespace Prelude;

const gte = __NAMESPACE__.'\gte';

function gte($x)
{
    return function ($y) use ($x) {
        return $x >= $y;
    };
}
