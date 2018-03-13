<?php

declare(strict_types=1);

namespace Prelude;

const indexOf = __NAMESPACE__.'\indexOf';

function indexOf($x): \Closure
{
    return function (array $xs, bool $strict = false) use ($x): ?int {
        $pos = array_search($x, $xs, $strict);

        return false === $pos
            ? null
            : $pos;
    };
}
