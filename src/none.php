<?php

declare(strict_types=1);

namespace Prelude;

const none = __NAMESPACE__.'\none';

function none(callable $pred): \Closure
{
    return not(any($pred));
}
