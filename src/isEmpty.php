<?php

namespace Prelude;

const isEmpty = __NAMESPACE__.'\isEmpty';

function isEmpty($x)
{
    $isEmpty = anyPass([
        isNull,
        equals(''),
        equals(0),
        equals(0.0),
        equals('0'),
        equals([]),
        equals(false)
    ]);
    return $isEmpty($x);
}
