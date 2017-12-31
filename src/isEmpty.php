<?php

declare(strict_types=1);

namespace Prelude;

const isEmpty = __NAMESPACE__.'\isEmpty';

/**
 * Because `is_empty` does not callable.
 */
function isEmpty($x): bool
{
    return anyPass([
        isNull,
        equals(''),
        equals(0),
        equals(0.0),
        equals('0'),
        equals([]),
        equals(false)
    ])($x);
}
