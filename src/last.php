<?php

declare(strict_types=1);

namespace Prelude;

const last = __NAMESPACE__.'\last';

use InvalidArgumentException;

function last(array $xss)
{
    if ([] === $xss) {
        throw new InvalidArgumentException('Empty list.');
    }

    return array_values(
        array_slice($xss, -1)
    )[0];
}
