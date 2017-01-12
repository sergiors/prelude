<?php

namespace Prelude;

const lt = __NAMESPACE__.'\lt';

function lt($x)
{
    return function ($y) use ($x) {
        return $x < $y;
    };
}
