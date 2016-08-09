<?php

namespace Prelude;

const is = __NAMESPACE__.'\is';

function is(...$args)
{
    return partial(function ($type, $value) {
        return $value instanceof $type;
    })(...$args);
}
