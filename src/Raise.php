<?php

namespace Prelude;

final class Raise
{
    public static function runtime()
    {
        throw new \RuntimeException();
    }

    public static function invalid()
    {
        throw new \InvalidArgumentException();
    }
}
