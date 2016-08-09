<?php

namespace Prelude;

const replace = __NAMESPACE__.'\replace';

function replace(...$args)
{
    return partial('array_replace')(...$args);
}
