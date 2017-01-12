<?php

namespace Prelude;

const gt = __NAMESPACE__.'\gt';

function gt($x)
{
    return function ($y) use ($x) {
        return $x > $y;
    };
}
