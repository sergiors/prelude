<?php

use function Prelude\partial;

/**
 * @Revs(1000)
 * @Iterations(10)
 */
class PartialBench
{
    public function benchPartial2Args()
    {
        $fn = partial(function ($x, $y) {
            return $x + $y;
        });

        $rest = $fn(10);
        $rest(50);
    }

    public function benchNative2Args()
    {
        $fn = function ($x) {
            return function ($y) use ($x) {
                return $x + $y;
            };
        };

        $rest = $fn(10);
        $rest(50);
    }
}
