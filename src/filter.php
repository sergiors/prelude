<?php

namespace Prelude;

const filter = __NAMESPACE__.'\filter';

function filter(...$args)
{
    return partial(function (callable $fn, array $xss) {
        return array_filter($xss, $fn);
    })(...$args);
}
