<?php

namespace Prelude;

const head = __NAMESPACE__.'\head';

function head(array $xss)
{
    $throw = function () {
        throw new \InvalidArgumentException();
    };

    return ifElse(equals([]), $throw, values)($xss)[0];
}
