<?php

declare(strict_types=1);

namespace Prelude;

const cond = __NAMESPACE__.'\cond';

use Prelude\Exception\CondClauseException;
use function Prelude\head;
use function Prelude\tail;
use function Prelude\ifElse;

/**
 * @see http://elixir-lang.org/getting-started/case-cond-and-if.html#cond
 */
function cond(array $pairs): \Closure
{
    if ([] === $pairs) {
        throw new CondClauseException;
    }

    [$if, $then] = head($pairs);

    $else = function ($x) use ($pairs) {
        return cond(tail($pairs))($x);
    };

    return ifElse($if)
        ($then)
        ($else);
}
