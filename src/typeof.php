<?php

namespace Prelude;

const typeof = __NAMESPACE__.'\typeof';

function typeof(...$args)
{
    return partial(function ($type, $x) {
        return $x instanceof $type;
    })(...$args);
}