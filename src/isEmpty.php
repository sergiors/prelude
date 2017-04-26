<?php

declare(strict_types = 1);

namespace Prelude;

const isEmpty = __NAMESPACE__.'\isEmpty';

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
