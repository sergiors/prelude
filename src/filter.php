<?php

namespace Prelude;

const filter = __NAMESPACE__.'\filter';

/**
 * Almost an alias. It's solve the arguments order.
 */
function filter(...$args)
{
    $filter = partial(function (callable $fn, array $xss, $flag = 0) {
        return array_filter($xss, $fn, $flag);
    });

    return $filter(...$args);
}
