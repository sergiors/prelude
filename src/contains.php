<?php

declare(strict_types=1);

namespace Prelude;

const contains = __NAMESPACE__.'\contains';

use Closure;

function contains($x): Closure
{
    return function (array $xs, bool $strict = false) use ($x): bool {
        return in_array($x, $xs, $strict);
    };
}
