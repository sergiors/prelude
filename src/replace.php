<?php

declare(strict_types = 1);

namespace Prelude;

const replace = __NAMESPACE__.'\replace';

function replace(array $x)
{
    return function (array $y, ...$rest) use ($x) {
        return array_replace($x, $y, ...$rest);
    };
}
