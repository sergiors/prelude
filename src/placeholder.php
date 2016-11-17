<?php

namespace Prelude;

const placeholder = __NAMESPACE__.'\placeholder';

function placeholder(callable $callback, ...$ps)
{
    $ks = call_user_func(pipe(filter(equals(_)), keys), $ps);

    $proxy = always(function (...$args) use ($callback, $ps, $ks) {
        $fn = pipe(flip, map(get($args)), replace($ps));
        return $callback(...$fn($ks));
    });

    $fn = ifElse(equals([]), [Raise::class, 'invalid'], $proxy);
    return $fn($ks);
}
