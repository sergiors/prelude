<?php

declare(strict_types=1);

namespace Prelude;

const prepend = __NAMESPACE__.'\prepend';

function prepend($x): \Closure
{
    return function (array $xs) use ($x): array {
        return \array_merge([$x], $xs);
    };
}
