<?php

namespace Prelude;

const get = __NAMESPACE__.'\get';

function get(...$args)
{
    return partial(function (array $xss, $x, $notfound = false) {
        return $xss[$x] ?? $notfound;
    })(...$args);
}
