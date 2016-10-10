<?php

namespace Prelude;

const has = __NAMESPACE__.'\has';

function has(...$args)
{
    $fn = partial(function ($x, array $xss) {
        return isset($xss[$x]);
    });

    return $fn(...$args);
}
