<?php

namespace Prelude;

const head = __NAMESPACE__.'\head';

function head(array $xss)
{
    if ([] === $xss) {
        throw new \InvalidArgumentException();
    }
    
    return array_values($xss)[0];
}
