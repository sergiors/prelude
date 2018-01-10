<?php

declare(strict_types=1);

namespace Prelude;

const divide = __NAMESPACE__.'\divide';

function divide($x): \Closure
{
    return function ($y) use ($x) {
        return $x / $y;
    };
}
