<?php

namespace Prelude;

const equals = __NAMESPACE__.'\equals';

function equals(...$args)
{
    return partial(function ($a, $b) {
        return $a === $b;
    })(...$args);
}
