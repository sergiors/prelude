<?php

namespace Prelude;

const pipe = '\pipe';

function pipe(callable ...$callbacks)
{
    return new class(...$callbacks) {
        private $callbacks;

        public function __construct(callable ...$callbacks)
        {
            $this->callbacks = $callbacks;
        }

        public function pipe(callable ...$callbacks)
        {
            return pipe(...array_merge($this->callbacks, $callbacks));
        }

        public function __invoke($payload)
        {
            return array_reduce($this->callbacks, function ($payload, $callback) {
                return $callback($payload);
            }, $payload);
        }
    };
}
