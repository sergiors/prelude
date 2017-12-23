<?php

declare(strict_types=1);

namespace Prelude;

const last = __NAMESPACE__.'\last';

function last(array $xss)
{
    if ([] === $xss) {
        throw new \InvalidArgumentException;
    }

    return array_values(
        array_slice($xss, -1)
    )[0];
}
