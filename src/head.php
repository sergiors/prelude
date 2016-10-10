<?php

namespace Prelude;

const head = __NAMESPACE__.'\head';

function head(array $xss)
{
    $throw = function () {
        throw new \InvalidArgumentException();
    };

    $fn = ifElse(equals([]), $throw, values);
    return $fn($xss)[0];
}
