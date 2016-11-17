<?php

namespace Prelude;

const placeholder = __NAMESPACE__.'\placeholder';

function placeholder(callable $fn, ...$ps)
{
    $ks = call_user_func(pipe(filter(equals(_)), keys), $ps);

    $success = always(function (...$args) use ($fn, $ps, $ks) {
        return $fn(...call_user_func(pipe(flip, map(get($args)), replace($ps)), $ks));
    });

    $test = ifElse(equals([]), [Raise::class, 'invalid'], $success);
    return $test($ks);
}
