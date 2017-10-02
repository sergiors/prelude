<?php

declare(strict_types = 1);

namespace Prelude;

const take = __NAMESPACE__.'\take';

function take(int $n): \Closure
{
    return function (array $xs) use ($n): array {
        return array_slice($xs, 0, $n);
    };
}
