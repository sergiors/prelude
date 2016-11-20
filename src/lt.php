<?php

namespace Prelude;

const lt = __NAMESPACE__.'\lr';

function lt(...$args)
{
    $lt = partial(function ($x, $y) {
        return $x < $y;
    });

    return $lt(...$args);
}
