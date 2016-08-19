<?php

namespace Prelude;

const filter = __NAMESPACE__.'\filter';

function filter(...$args)
{
    return partial(function (callable $fn, array $xss, $flag = 0) {
        return array_filter($xss, $fn, $flag);
    })(...$args);
}
