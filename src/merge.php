<?php

declare(strict_types = 1);

namespace Prelude;

const merge = __NAMESPACE__.'\merge';

function merge(array $x)
{
    return function (array $y) use ($x) {
        return array_merge($x, $y);
    };
}
