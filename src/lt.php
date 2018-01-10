<?php

declare(strict_types=1);

namespace Prelude;

const lt = __NAMESPACE__.'\lt';

function lt($x): \Closure
{
    return function ($y) use ($x): bool {
        return $x < $y;
    };
}
