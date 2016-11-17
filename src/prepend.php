<?php

namespace Prelude;

const prepend = __NAMESPACE__.'\prepend';

function prepend(...$args)
{
    $fn = partial(function ($x, array $xs) {
        return array_merge([$x], $xs);
    });

    return $fn(...$args);
}
