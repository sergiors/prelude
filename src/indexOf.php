<?php

declare(strict_types=1);

namespace Prelude;

const indexOf = __NAMESPACE__.'\indexOf';

function indexOf($needle): \Closure
{
    return function (array $haystack, bool $strict = false) use ($needle): int {
        $pos = array_search($needle, $haystack, $strict);

        return false === $pos
            ? -1
            : $pos;
    };
}
