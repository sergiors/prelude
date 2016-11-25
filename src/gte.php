<?php

namespace Prelude;

const gte = __NAMESPACE__.'\gte';

function gte(...$args)
{
    $gte = partial(function ($x, $y) {
        return $x >= $y;
    });

    return $gte(...$args);
}
