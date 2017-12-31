<?php

declare(strict_types=1);

namespace Prelude;

const map = __NAMESPACE__.'\map';

use Closure;

function map(callable $callback): Closure
{
    return function (array $xss, array ...$rest) use ($callback): array {
        return array_map($callback, $xss, ...$rest);
    };
}
