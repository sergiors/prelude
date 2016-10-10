<?php

namespace Prelude;

const head = __NAMESPACE__.'\head';

function head(array $xss)
{
    $fn = ifElse(equals([]), [Raise::class, 'invalid'], values);
    return $fn($xss)[0];
}
