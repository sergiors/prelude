<?php

namespace Prelude;

const getIn = __NAMESPACE__.'\getIn';

function getIn(...$args)
{
    $getIn = partial(function (array $xss, array $ks, $notfound = false) {
        $lazy = function (array $ks) use ($xss, $notfound) {
            $fn = pipe(
                head,
                placeholder(get, $xss, _, $notfound),
                ifElse(isArray, placeholder(getIn, _, tail($ks), $notfound), id)
            );

            return $fn($ks);
        };

        $fn = cond([
            [has(0), $lazy],
            [always(true), always($notfound)]
        ]);

        return $fn($ks);
    });

    return $getIn(...$args);
}
