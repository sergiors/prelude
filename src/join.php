<?php

declare(strict_types = 1);

namespace Prelude;

const join = __NAMESPACE__.'\join';

function join(array $xss): \Closure
{
    return function (string $glue) use ($xss): string {
        return implode($glue, $xss);
    };
}
