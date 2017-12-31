<?php

declare(strict_types=1);

namespace Prelude;

const split = __NAMESPACE__.'\split';

use Closure;

function split(string $str): Closure
{
    return function (string $separator, $limit = PHP_INT_MAX) use ($str): array {
        return explode($separator, $str, $limit);
    };
}
