<?php

declare(strict_types = 1);

namespace Prelude;

const split = __NAMESPACE__.'\split';

function split(string $string)
{
    return function (string $separator, $limit = PHP_INT_MAX) use ($string) {
        return explode($separator, $string, $limit);
    };
}
