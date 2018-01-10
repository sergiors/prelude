<?php

declare(strict_types=1);

namespace Prelude;

const merge = __NAMESPACE__.'\merge';

function merge(array $x): \Closure
{
    return function (array $y) use ($x): array {
        return array_merge($x, $y);
    };
}
