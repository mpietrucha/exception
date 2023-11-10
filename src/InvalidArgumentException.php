<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class InvalidArgumentException extends \InvalidArgumentException
{
    use Exceptionable;
}
