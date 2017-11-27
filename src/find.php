<?php

declare(strict_types=1);

namespace Prelude;

const find = __NAMESPACE__.'\find';

function find(callable $pred): \Closure
{
    return function (array $xss) use ($pred) {
        $xs = get($xss)(0, []);

        if ([] === $xs) {
            return null;
        }

        if ($pred($xs)) {
            return $xs;
        }

        return find($pred)(tail($xss));
    };
}
