<?php

declare(strict_types=1);

namespace Prelude;

const all = __NAMESPACE__.'\all';


function all(callable $pred): \Closure
{
    return function (array $xs) use ($pred): bool {
        return \array_reduce($xs, function (bool $prev, $x) use ($pred): bool {
            return $prev && $pred($x);
        }, true);
    };
}
