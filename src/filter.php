<?php

namespace Prelude;

const filter = __NAMESPACE__.'\filter';

function filter(...$args)
{
    $fn = partial(function (callable $fn, array $xss, $flag = 0) {
        return array_filter($xss, $fn, $flag);
    });

    return $fn(...$args);
}
