<?php

namespace Prelude;

const equals = __NAMESPACE__.'\equals';

function equals(...$args)
{
    $fn = partial(function ($a, $b) {
        return $a === $b;
    });

    return $fn(...$args);
}
