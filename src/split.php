<?php

declare(strict_types = 1);

namespace Prelude;

const split = __NAMESPACE__.'\split';

function split(string $string): \Closure
{
    return function (string $separator, $limit = PHP_INT_MAX) use ($string): array {
        return explode($separator, $string, $limit);
    };
}
