<?php

declare(strict_types = 1);

namespace Prelude;

const indexOf = __NAMESPACE__.'\indexOf';

function indexOf($needle): \Closure
{
    return function (array $haystack, bool $strict = false) use ($needle): int {
        if (false === $k = array_search($needle, $haystack, $strict)) {
            return -1;
        }

        return $k;
    };
}
