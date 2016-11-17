<?php

namespace Prelude;

const placeholder = __NAMESPACE__.'\placeholder';

function placeholder(callable $callback, ...$ps)
{
    $ks = call_user_func(pipe(filter(equals(_)), keys), $ps);

    $success = always(function (...$args) use ($callback, $ps, $ks) {
        return $callback(...call_user_func(pipe(flip, map(get($args)), replace($ps)), $ks));
    });

    $fn = ifElse(equals([]), [Raise::class, 'invalid'], $success);
    return $fn($ks);
}
