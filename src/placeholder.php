<?php

namespace Prelude;

const placeholder = __NAMESPACE__.'\placeholder';

function placeholder(callable $fn, ...$ps)
{
    $filter = pipe(filter(equals(_)), keys);
    $ks = $filter($ps);

    $success = always(function (...$args) use ($fn, $ps, $ks) {
        $replace = pipe(flip, map(get($args)), replace($ps));
        return $fn(...$replace($ks));
    });

    $fn = ifElse(equals([]), [Raise::class, 'invalid'], $success);
    return $fn($ks);
}
