<?php

namespace Prelude;

const multiply = __NAMESPACE__.'\multiply';

function multiply(...$args)
{
    $multiply = partial(function ($x, $y) {
        return $x * $y;
    });

    return $multiply(...$args);
}
