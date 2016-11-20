<?php

namespace Prelude;

const find = __NAMESPACE__.'\find';

function find(...$args)
{
    $find = partial(function (callable $pred, array $xss) {
        $lazy = function () use ($xss, $pred) {
            return find($pred, tail($xss));
        };

        $fn = cond([
            [$pred, id],
            [equals([]), always(null)],
            [always(true), $lazy]
        ]);

        return $fn(get($xss, 0, []));
    });

    return $find(...$args);
}
