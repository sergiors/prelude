<?php

namespace Prelude;

const nextStep = __NAMESPACE__.'\nextStep';

function nextStep(callable ...$callbacks)
{
    return function ($payload) use ($callbacks) {
        $next = function ($payload) use ($callbacks) {
            return call_user_func(nextStep(...tail($callbacks)), $payload);
        };
        $fn = ifElse(isCallable, function (callable $callback) use ($payload, $next) {
            return $callback($payload, $next);
        }, always($payload));

        return $fn(get($callbacks, 0));
    };
}
