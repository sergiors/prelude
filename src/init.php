<?php

declare(strict_types=1);

namespace Prelude;

const init = __NAMESPACE__.'\init';

function init(array $xss): array
{
    return \array_slice($xss, 0, -1);
}
