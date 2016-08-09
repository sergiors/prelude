<?php

namespace Prelude;

const has = __NAMESPACE__.'\has';

function has(...$args)
{
    return partial(function ($x, array $xss) {
        return isset($xss[$x]);
    })(...$args);
}
