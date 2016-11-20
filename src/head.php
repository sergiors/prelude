<?php

namespace Prelude;

const head = __NAMESPACE__.'\head';

function head(array $xss)
{
    $head = ifElse(equals([]), [Raise::class, 'invalid'], values);
    return $head($xss)[0];
}
