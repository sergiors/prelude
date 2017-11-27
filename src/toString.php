<?php

declare(strict_types=1);

namespace Prelude;

const toString = __NAMESPACE__.'\toString';

function toString($x): string
{
    return (string) $x;
}
