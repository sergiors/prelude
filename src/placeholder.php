<?php

declare(strict_types = 1);

namespace Prelude;

const placeholder = __NAMESPACE__.'\placeholder';

function placeholder(callable $callback)
{
    return function (...$placeholders) use ($callback) {
        $ks = pipe(filter(equals(_)), keys)($placeholders);

        if ([] === $ks) {
            throw new \InvalidArgumentException();
        }

        return function (...$args) use ($callback, $placeholders, $ks) {
            $replace = pipe(flip, map(get($args)), replace($placeholders));
            return $callback(...$replace($ks));
        };
    };
}
