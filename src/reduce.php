<?php

namespace Prelude;

const reduce = __NAMESPACE__.'\reduce';

function reduce(...$args)
{
    return partial(function (callable $fn, array $xss, $initial = null) {
        return array_reduce($xss, $fn, $initial);
    })(...$args);
}
