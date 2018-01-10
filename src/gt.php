<?php

declare(strict_types=1);

namespace Prelude;

const gt = __NAMESPACE__.'\gt';

use Closure;

function gt($x): Closure
{
    return function ($y) use ($x): bool {
        return $x > $y;
    };
}
