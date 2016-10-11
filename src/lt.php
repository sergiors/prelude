<?php

namespace Prelude;

const lt = __NAMESPACE__.'\lr';

function lt(...$args)
{
    $fn = partial(function ($x, $y) {
        return $x < $y;
    });

    return $fn(...$args);
}
