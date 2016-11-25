<?php

namespace Prelude;

const lte = __NAMESPACE__.'\lre';

function lte(...$args)
{
    $lte = partial(function ($x, $y) {
        return $x <= $y;
    });

    return $lte(...$args);
}
