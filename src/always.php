<?php

declare(strict_types = 1);

namespace Prelude;

const always = __NAMESPACE__.'\always';

function always($x): \Closure
{
    return function () use ($x) {
        return $x;
    };
}
