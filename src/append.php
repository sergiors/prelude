<?php

declare(strict_types = 1);

namespace Prelude;

const append = __NAMESPACE__.'\append';

function append($x)
{
    return function (array $xs) use ($x) {
        return array_merge($xs, [$x]);
    };
}
