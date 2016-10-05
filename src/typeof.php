<?php

namespace Prelude;

const typeof = __NAMESPACE__.'\typeof';

function typeof(...$args)
{
    return partial(function ($type, $value) {
        return $value instanceof $type;
    })(...$args);
}