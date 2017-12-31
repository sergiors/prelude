<?php

declare(strict_types=1);

namespace Prelude;

const typeof = __NAMESPACE__.'\typeof';

use Closure;

function typeof(string $type): Closure
{
    return function ($object) use ($type): bool {
        return $object instanceof $type;
    };
}
