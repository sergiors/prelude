<?php

declare(strict_types=1);

namespace Prelude;

const prop = __NAMESPACE__.'\prop';

use Closure;

function prop($x): Closure
{
    return function (array $xss) use ($x) {
        return $xss[$x] ?? null;
    };
}
