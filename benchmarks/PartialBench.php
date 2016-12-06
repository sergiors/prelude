<?php

use function Prelude\partial;

/**
 * @Revs(1000)
 * @Iterations(5)
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

    public function benchPartialNativeFn()
    {
        $alpha = ['a', 'b', 'c', 'd', 'f'];
        $fn = partial('array_slice');

        $fn($alpha, 2);
        $fn($alpha, -2, 1);
        $fn($alpha, 0, 3);
    }
}
