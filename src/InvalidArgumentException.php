<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class InvalidArgumentException extends \InvalidArgumentException
{
    use Exceptionable;
}
