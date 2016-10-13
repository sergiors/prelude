<?php

namespace Prelude;

const append = '\append';

function append(...$args)
{
    $fn = partial(function ($x, array $xs) {
        return array_merge($xs, [$x]);
    });

    return $fn(...$args);
}
