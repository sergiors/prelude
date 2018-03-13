<?php

declare(strict_types=1);

namespace Prelude;

use function Prelude\tail;

const find = __NAMESPACE__.'\find';

/**
 * find :: (a -> Boolean) -> [a] -> a
 */
function find(callable $pred): \Closure
{
    return function (array $xss) use ($pred) {
        if ([] === $xs = $xss[0] ?? []) {
            return null;
        }

        if ($pred($xs)) {
            return $xs;
        }

        return find($pred)(tail($xss));
    };
}
