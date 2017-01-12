<?php

declare(strict_types = 1);

namespace Prelude;

const when = __NAMESPACE__.'\when';

function when(callable $pred)
{
    return function (callable $succfn) use ($pred) {
        return function ($x) use ($pred, $succfn) {
            return $pred($x)
                ? $succfn($x)
                : $x;
        };
    };
}
