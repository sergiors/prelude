<?php

namespace Prelude;

const gt = __NAMESPACE__.'\gt';

function gt(...$args)
{
    $gt = partial(function ($x, $y) {
        return $x > $y;
    });

    return $gt(...$args);
}
