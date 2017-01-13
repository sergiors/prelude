<?php

declare(strict_types = 1);

namespace Prelude;

const join = __NAMESPACE__.'\join';

function join(array $xss)
{
    return function (string $glue) use ($xss) {
        return implode($glue, $xss);
    };
}
