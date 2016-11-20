<?php

namespace Prelude;

const typeof = __NAMESPACE__.'\typeof';

function typeof(...$args)
{
    $typeof = partial(function ($type, $object) {
        return $object instanceof $type;
    });

    return $typeof(...$args);
}
