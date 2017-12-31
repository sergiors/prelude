<?php

declare(strict_types=1);

namespace Prelude;

const gte = __NAMESPACE__.'\gte';

use Closure;

function gte($x): Closure
{
    return function ($y) use ($x): bool {
        return $x >= $y;
    };
}
