<?php

declare(strict_types=1);

namespace Prelude;

const append = __NAMESPACE__.'\append';

use Closure;

function append($x): Closure
{
    return function (array $xs) use ($x): array {
        return array_merge($xs, [$x]);
    };
}
