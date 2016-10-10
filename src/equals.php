<?php

namespace Prelude;

const equals = __NAMESPACE__.'\equals';

function equals(...$args)
{
    $fn = partial(function ($x, $y) {
        return $x === $y;
    });

    return $fn(...$args);
}
