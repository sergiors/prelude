<?php

namespace Prelude;

const ifElse = __NAMESPACE__.'\ifElse';

function ifElse(...$args)
{
    return partial(function (callable $pred, callable $ontrue, callable $onfalse) {
        return function ($value) use ($pred, $ontrue, $onfalse) {
            return $pred($value)
                ? $ontrue($value)
                : $onfalse($value);
        };
    })(...$args);
}
