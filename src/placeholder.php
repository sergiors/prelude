<?php

namespace Prelude;

const placeholder = __NAMESPACE__.'\placeholder';

function placeholder(callable $fn, ...$ps)
{
    $filter = pipe(filter(equals(_)), keys);
    $ks = $filter($ps);

    $success = function (...$args) use ($fn, $ps, $ks) {
        $replace = pipe(flip, map(get($args)), replace($ps));
        $args = $replace($ks);
        return $fn(...$args);
    };
    $throw = function () {
        throw new \InvalidArgumentException();
    };

    $fn = ifElse(equals([]), $throw, always($success));
    return $fn($ks);
}
