<?php

namespace Prelude;

const nextStep = __NAMESPACE__.'\nextStep';

function nextStep(callable ...$callbacks)
{
    return function ($payload) use ($callbacks) {
        $next = function ($payload) use ($callbacks) {
            $fn = nextStep(...tail($callbacks));
            return $fn($payload);
        };
        $fn = ifElse(isCallable, function (callable $callback) use ($payload, $next) {
            return $callback($payload, $next);
        }, always($payload));

        return $fn(get($callbacks, 0));
    };
}
