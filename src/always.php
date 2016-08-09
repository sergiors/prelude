<?php

namespace Prelude;

const always = __NAMESPACE__.'\always';

function always($x)
{
    return function () use ($x) {
        return $x;
    };
}
