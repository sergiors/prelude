<?php

namespace Prelude;

const typeof = __NAMESPACE__.'\typeof';

function typeof(...$args)
{
    $fn = partial(function ($type, $object) {
        return $object instanceof $type;
    });

    return $fn(...$args);
}
