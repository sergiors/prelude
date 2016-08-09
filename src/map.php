<?php

namespace Prelude;

const map = __NAMESPACE__.'\map';

function map(...$args)
{
    return partial('array_map')(...$args);
}
