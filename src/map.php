<?php

declare(strict_types=1);

namespace Prelude;

const map = __NAMESPACE__.'\map';

/**
 * map :: (a -> b) -> [a] -> [b]
 */
function map(callable $callback): \Closure
{
    return function (array $xss, array ...$rest) use ($callback): array {
        return array_map($callback, $xss, ...$rest);
    };
}
