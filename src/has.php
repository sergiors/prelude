<?php

namespace Prelude;

const has = __NAMESPACE__.'\has';

function has(...$args)
{
    $has = partial(function ($x, array $xss) {
        return isset($xss[$x]);
    });

    return $has(...$args);
}
