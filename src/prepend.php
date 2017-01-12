<?php

declare(strict_types = 1);

namespace Prelude;

const prepend = __NAMESPACE__.'\prepend';

function prepend($x)
{
    return function (array $xs) use ($x) {
        return array_merge([$x], $xs);
    };
}
