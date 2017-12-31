<?php

declare(strict_types=1);

namespace Prelude;

const find = __NAMESPACE__.'\find';

use Closure;

function find(callable $pred): Closure
{
    return function (array $xss) use ($pred) {
        if ([] === $xs = $xss[0] ?? []) {
            return -1;
        }

        if ($pred($xs)) {
            return $xs;
        }

        return find($pred)(tail($xss));
    };
}
