<?php

namespace Mpietrucha\Support\Exception\Concerns;

use Closure;
use Mpietrucha\Support\Concerns\Factoryable;

use function Mpietrucha\Support\Disclosure\{disclosure, not};

trait Exceptionable
{
    use Factoryable;

    protected bool|Closure $shouldThrow = true;

    public function when(mixed $when): self
    {
        disclosure($this)->boolean()->shouldThrow = $when;

        return $this;
    }

    public function unless(mixed $unless): self
    {
        disclosure($this)->boolean()->shouldThrow = not($unless);

        return $this;
    }

    public function throw(string|Closure $message, mixed ...$arguments): void
    {
        if (! value($this->shouldThrow, $this)) {
            return;
        }

        $message = value($message, ...$arguments);

        $this->message = sprintf($message, ...$arguments);

        throw $this;
    }
}
