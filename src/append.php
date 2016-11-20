<?php

namespace Prelude;

const append = __NAMESPACE__.'\append';

function append(...$args)
{
    $append = partial(function ($x, array $xs) {
        return array_merge($xs, [$x]);
    });

    return $append(...$args);
}
