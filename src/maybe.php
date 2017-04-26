<?php

declare(strict_types = 1);

namespace Prelude;

const maybe = __NAMESPACE__.'\maybe';

function maybe($x): MaybeInterface
{
    return null === $x
        ? new Nothing()
        : new Just($x);
}

interface MaybeInterface
{
    public function bind(callable $fn): MaybeInterface;

    /**
     * isJust :: Maybe a -> Bool
     */
    public function isJust(): bool;

    /**
     * isNothing :: Maybe a -> Bool
     */
    public function isNothing(): bool;

    /**
     * fromJust :: Maybe a -> a
     */
    public function fromJust();

    /**
     * fromMaybe :: a -> Maybe a -> a
     */
    public function fromMaybe($def);

    /**
     * maybe :: b -> (a -> b) -> Maybe a -> b
     */
    public function maybe($def, callable $fn);
}

final class Just implements MaybeInterface
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function bind(callable $fn): MaybeInterface
    {
        return maybe($fn($this->value));
    }

    public function isJust(): bool
    {
        return true;
    }

    public function isNothing(): bool
    {
        return false;
    }

    public function fromJust()
    {
        return $this->value;
    }

    public function fromMaybe($def)
    {
        return $this->value;
    }

    public function maybe($def, callable $fn)
    {
        return $fn($this->value);
    }
}

final class Nothing implements MaybeInterface
{
    public function bind(callable $fn): MaybeInterface
    {
        return $this;
    }

    public function isJust(): bool
    {
        return false;
    }

    public function isNothing(): bool
    {
        return true;
    }

    public function fromJust()
    {
        throw new \RuntimeException();
    }

    public function fromMaybe($def)
    {
        return $def;
    }

    public function maybe($def, callable $fn)
    {
        return $def;
    }
}
