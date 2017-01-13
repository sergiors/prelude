<?php

declare(strict_types = 1);

namespace Prelude;

const has = __NAMESPACE__.'\has';

function has($x)
{
    return function (array $xss) use ($x) {
        return isset($xss[$x]);
    };
}
