<?php

declare(strict_types=1);

namespace Prelude;

const props = __NAMESPACE__.'\props';

use Closure;

function props(array $ks): Closure
{
    return function (array $xs) use ($ks) {
        return array_map(function ($k) use ($xs) {
            return $xs[$k] ?? null;
        }, $ks);
    };
}
