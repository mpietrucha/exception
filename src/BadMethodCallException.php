<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class BadMethodCallException extends \BadMethodCallException
{
    use Exceptionable;
}
