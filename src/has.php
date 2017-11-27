<?php

declare(strict_types=1);

namespace Prelude;

const has = __NAMESPACE__.'\has';

function has($x): \Closure
{
    return function (array $xss) use ($x): bool {
        return isset($xss[$x]);
    };
}
