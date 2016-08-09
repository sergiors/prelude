<?php

namespace Prelude;

const slice = __NAMESPACE__.'\slice';

function slice(...$args)
{
    return partial('array_slice')(...$args);
}
