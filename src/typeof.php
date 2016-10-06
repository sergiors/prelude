<?php

namespace Prelude;

const typeof = __NAMESPACE__.'\typeof';

function typeof(...$args)
{
    return partial(function ($type, $object) {
        return $object instanceof $type;
    })(...$args);
}
