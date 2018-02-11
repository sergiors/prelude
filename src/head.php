<?php

declare(strict_types=1);

namespace Prelude;

const head = __NAMESPACE__.'\head';

use Prelude\Exception\EmptyListException;

function head(array $xss)
{
    if ([] === $xss) {
        throw new EmptyListException;
    }

    return \array_values(
        \array_slice($xss, 0, 1)
    )[0];
}
