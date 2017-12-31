<?php

declare(strict_types=1);

namespace Prelude;

const equals = __NAMESPACE__.'\equals';

use Closure;

function equals($x): Closure
{
    return function ($y) use ($x): bool {
        return $x === $y;
    };
}
