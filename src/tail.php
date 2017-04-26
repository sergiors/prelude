<?php

namespace Prelude;

const tail = __NAMESPACE__.'\tail';

function tail(array $xss): array
{
    return array_slice($xss, 1);
}
