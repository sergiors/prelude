<?php

declare(strict_types=1);

namespace Prelude;

const filter = __NAMESPACE__.'\filter';

function filter(callable $callback): \Closure
{
    return function (array $xss, int $flag = 0) use ($callback): array {
        return \array_filter($xss, $callback, $flag);
    };
}
