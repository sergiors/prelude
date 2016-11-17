<?php

namespace Prelude;

const find = __NAMESPACE__.'\find';

function find(...$args)
{
    $fn = partial(function (callable $pred, array $xss) {
        $fn = cond([
            [$pred, id],
            [equals([]), always(null)],
            [always(true), function () use ($xss, $pred) {
                return find($pred, tail($xss));
            }]
        ]);

        return $fn(get($xss, 0, []));
    });

    return $fn(...$args);
}
