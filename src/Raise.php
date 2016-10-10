<?php

namespace Prelude;

final class Raise
{
    public static function runtime()
    {
        throw new Runtime();
    }

    public static function invalid()
    {
        throw new InvalidArgument();
    }
}

final class Runtime extends \RuntimeException
{
}

final class InvalidArgument extends \InvalidArgumentException
{
}
