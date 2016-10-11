<?php

namespace Prelude;

const gt = __NAMESPACE__.'\gt';

function gt(...$args)
{
    $fn = partial(function ($x, $y) {
        return $x > $y;
    });

    return $fn(...$args);
}
