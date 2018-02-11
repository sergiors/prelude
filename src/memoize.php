<?php

declare(strict_types=1);

namespace Prelude;

const memoize = __NAMESPACE__.'\memoize';

function memoize(callable $callback): \Closure
{
    return function (...$args) use ($callback) {
        static $cache = [];

        $key = \md5(\serialize($args));
        
        if (!isset($cache[$key])) {
            $cache[$key] = $callback(...$args);
        }

        return $cache[$key];
    };
}
