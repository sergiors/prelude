<?php

namespace Prelude;

const head = __NAMESPACE__.'\head';

function head(array $xss)
{
    $head = ifElse(equals([]), [Raise::class, 'invalid'], function (array $xss) {
        return array_values(array_slice($xss, 0, 1))[0];
    });

    return $head($xss);
}
