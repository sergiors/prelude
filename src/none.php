<?php

declare(strict_types=1);

namespace Prelude;

use function Prelude\not;
use function Prelude\any;

const none = __NAMESPACE__.'\none';

function none(callable $pred): \Closure
{
    return not(any($pred));
}
