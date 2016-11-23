<?php

namespace Prelude;

const apply = __NAMESPACE__.'\apply';

function apply(...$args)
{
    $apply = partial(function (callable $fn, $args)  {
        return $fn($args);
    });

    return $apply(...$args);
}
