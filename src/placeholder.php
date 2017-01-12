<?php

namespace Prelude;

const placeholder = __NAMESPACE__.'\placeholder';

function placeholder(callable $callback, ...$ps)
{
    $ks = apply(pipe(filter(equals(_)), keys), $ps);

    $proxy = always(function (...$args) use ($callback, $ps, $ks) {
        $replace = pipe(flip, map(get($args)), replace($ps));
        return $callback(...$replace($ks));
    });

    $fn = ifElse(equals([]))([Raise::class, 'invalid'])($proxy);
    return $fn($ks);
}
