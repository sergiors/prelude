<?php

namespace Prelude;

const multiply = __NAMESPACE__.'\multiply';

function multiply(...$args)
{
    $fn = partial(function ($x, $y) {
        return $x * $y;
    });

    return $fn(...$args);
}
