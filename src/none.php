<?php

declare(strict_types=1);

namespace Prelude;

const none = __NAMESPACE__.'\none';

use Closure;

function none(callable $pred): Closure
{
    return not(any($pred));
}
