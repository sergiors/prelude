<?php

declare(strict_types=1);

namespace Prelude;

const not = __NAMESPACE__.'\not';

function not(callable $callback): \Closure
{
    return function ($x) use ($callback): bool {
        return !$callback($x);
    };
}
