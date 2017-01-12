<?php

use function Prelude\partial;
use function Prelude\equals;

/**
 * @Revs(1000)
 * @Iterations(10)
 */
class EqualsBench
{
    public function benchPartial2Args()
    {
        $equals = partial(function ($x, $y) {
            return $x === $y;
        });

        $equals(10)(50);
    }

    public function benchNative2Args()
    {
        equals(10)(50);
    }
}
