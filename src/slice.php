<?php

declare(strict_types=1);

namespace Prelude;

const slice = __NAMESPACE__.'\slice';

function slice(array $xss): \Closure
{
    return function (int $offset, $length = null, $preserve_keys = false) use ($xss): array {
        return array_slice($xss, $offset, $length, $preserve_keys);
    };
}
