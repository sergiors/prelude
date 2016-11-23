<?php

namespace Prelude;

const when = __NAMESPACE__.'\when';

function when(...$args)
{
    $when = partial(function (callable $pred, callable $success, $x) {
        $fn = ifElse($pred, $success, id);
        return $fn($x);
    });

    return $when(...$args);
}
