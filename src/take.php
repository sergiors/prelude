<?php

declare(strict_types=1);

namespace Prelude;

const take = __NAMESPACE__.'\take';

function take(int $n): \Closure
{
    return function (array $xss) use ($n): array {
        return array_slice($xss, 0, $n);
    };
}
