<?php

declare(strict_types=1);

namespace Prelude;

const replace = __NAMESPACE__.'\replace';

function replace(array $x): \Closure
{
    return function (array $y, array ...$args) use ($x): array {
        return \array_replace($x, $y, ...$args);
    };
}
