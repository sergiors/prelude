<?php

namespace Prelude;

const reduce = __NAMESPACE__.'\reduce';

/**
 * Almost an alias. It's solve the arguments order.
 */
function reduce(...$args)
{
    $reduce = partial(function (callable $fn, array $xss, $initial = null) {
        return array_reduce($xss, $fn, $initial);
    });

    return $reduce(...$args);
}
