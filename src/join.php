<?php

namespace Prelude;

const join = __NAMESPACE__.'\join';

function join(...$args)
{
    $fn = partial('join');
    return $fn(...$args);
}
