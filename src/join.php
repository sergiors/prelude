<?php

namespace Prelude;

const join = __NAMESPACE__.'\join';

function join(...$args)
{
    return partial('join')(...$args);
}
