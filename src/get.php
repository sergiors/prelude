<?php

namespace Prelude;

const get = __NAMESPACE__.'\get';

function get(...$args)
{
    $fn = partial(function (array $xss, $x, $notfound = false) {
        $fn = ifElse(has($x), function ($xss) use ($x) {
            return $xss[$x];
        }, always($notfound));
        
        return $fn($xss);
    });

    return $fn(...$args);
}
