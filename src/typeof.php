<?php

declare(strict_types = 1);

namespace Prelude;

const typeof = __NAMESPACE__.'\typeof';

function typeof($type)
{
    return function ($object) use ($type) {
        return $object instanceof $type;
    };
}
