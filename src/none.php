<?php

declare(strict_types=1);

namespace Prelude;

const none = __NAMESPACE__.'\none';

use Closure;

function none(callable $pred): Closure
{
    return function (array $xss) use ($pred): bool {
        return -1 === find($pred)($xss);
    };
}
