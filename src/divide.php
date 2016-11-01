<?php

namespace Prelude;

const divide = __NAMESPACE__.'\divide';

function divide(...$args)
{
    $fn = partial(function ($x, $y) {
        return $x / $y;
    });

    return $fn(...$args);
}
