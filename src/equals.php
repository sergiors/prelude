<?php

namespace Prelude;

const equals = __NAMESPACE__.'\equals';

function equals(...$args)
{
    $equals = partial(function ($x, $y) {
        return $x === $y;
    });

    return $equals(...$args);
}
