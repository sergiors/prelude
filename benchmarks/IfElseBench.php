<?php

use function Prelude\partial;
use function Prelude\ifElse;

/**
 * @Revs(1000)
 * @Iterations(10)
 */
class IfElseBench
{
    public function benchPartial()
    {
        $ifElse = partial(function (callable $pred, callable $succfn, callable $failfn, $x) {
            return $pred($x)
                ? $succfn($x)
                : $failfn($x);
        });

        $ifElse(function ($x) {
                return $x === 10;
            })
            (function () {
                return true;
            })
            (function () {
                return false;
            })
            (10);
    }

    public function benchNative()
    {
        ifElse(function ($x) {
                return $x === 10;
            })
            (function () {
                return true;
            })
            (function () {
                return false;
            })
            (10);
    }
}
