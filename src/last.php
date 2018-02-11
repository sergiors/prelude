<?php

declare(strict_types=1);

namespace Prelude;

const last = __NAMESPACE__.'\last';

use Prelude\Exception\EmptyListException;

function last(array $xss)
{
    if ([] === $xss) {
        throw new EmptyListException;
    }

    return \array_values(
        \array_slice($xss, -1)
    )[0];
}
