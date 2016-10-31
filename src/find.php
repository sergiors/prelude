<?php

namespace Prelude;

const find = __NAMESPACE__.'\find';

function find(...$args)
{
    $fn = partial(function (callable $pred, array $xss) {
        $fn = ifElse(equals([]), always(null), function (array $xss) use ($pred) {
            $fn = ifElse($pred, id, always(find($pred, tail($xss))));
            return $fn(head($xss));
        });

        return $fn($xss);
    });

    return $fn(...$args);
}
