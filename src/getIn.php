<?php

namespace Prelude;

const getIn = __NAMESPACE__.'\getIn';

function getIn(...$args)
{
    $fn = partial(function (array $xss, array $ks, $notfound = false) {
        $fn = ifElse(has(0), function (array $ks) use ($xss, $notfound) {
            $fn = ifElse(isArray, placeholder(getIn, _, tail($ks), $notfound), id);
            return $fn(get($xss, $ks[0], $notfound));
        }, always($notfound));

        return $fn($ks);
    });

    return $fn(...$args);
}
