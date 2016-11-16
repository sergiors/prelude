<?php

namespace Prelude;

const successor = __NAMESPACE__.'\successor';

function successor(callable ...$callbacks)
{
    return function ($payload) use ($callbacks) {
        $proxy = function ($payload) use ($callbacks) {
            return call_user_func(successor(...tail($callbacks)), $payload);
        };
        $fn = ifElse(isCallable, function (callable $callback) use ($payload, $proxy) {
            return $callback($payload, $proxy);
        }, always($payload));

        return $fn(get($callbacks, 0));
    };
}
