<?php

namespace Prelude;

const getIn = __NAMESPACE__.'\getIn';

function getIn(...$args)
{
    return partial(function (array $xss, array $ks, $notfound = false) {
        if (not(has(0, $ks))) {
            return $notfound;
        }

        $xs = get($xss, $ks[0], $notfound);

        return is_array($xs)
            ? getIn($xs, tail($ks), $notfound)
            : $xs;
    })(...$args);
}
