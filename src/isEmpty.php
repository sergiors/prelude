<?php

namespace Prelude;

const isEmpty = __NAMESPACE__.'\isEmpty';

function isEmpty($x)
{
    $fn = anyPass([isNull, equals(''), equals(0), equals(0.0), equals('0'), equals([]), equals(false)]);
    return $fn($x);
}
