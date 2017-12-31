<?php

declare(strict_types=1);

namespace Prelude;

const slice = __NAMESPACE__.'\slice';

use Closure;

function slice(array $xss): Closure
{
    return function (
        int $offset,
        ?int $length = null,
        bool $preserve_keys = false
    ) use ($xss): array {
        return array_slice($xss, $offset, $length, $preserve_keys);
    };
}
