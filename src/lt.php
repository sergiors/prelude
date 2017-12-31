<?php

namespace Prelude;

const lt = __NAMESPACE__.'\lt';

use Closure;

function lt($x): Closure
{
    return function ($y) use ($x): bool {
        return $x < $y;
    };
}
