<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class BadFunctionCallException extends \BadFunctionCallException
{
    use Exceptionable;
}
