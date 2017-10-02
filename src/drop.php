<?php

declare(strict_types = 1);

namespace Prelude;

const drop = __NAMESPACE__.'\drop';

function drop(int $n): \Closure
{
    return function (array $xs) use ($n): array {
        return array_slice($xs, $n);
    };
}
