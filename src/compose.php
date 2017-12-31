<?php

declare(strict_types=1);

namespace Prelude;

const compose = __NAMESPACE__.'\compose';

use Closure;

/**
 * Performs right-to-left function composition.
 * The rightmost function may have any arity; the remaining functions must be unary.
 */
function compose(callable ...$args): Closure
{
    return pipe(...array_reverse($args));
}
