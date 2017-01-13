<?php

declare(strict_types = 1);

namespace Prelude;

const map = __NAMESPACE__.'\map';

function map(callable $callback)
{
    return function (array $xss, array ...$rest) use ($callback) {
        return array_map($callback, $xss, ...$rest);
    };
}
