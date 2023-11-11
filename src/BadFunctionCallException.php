<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class BadFunctionCallException extends \BadFunctionCallException
{
    use Exceptionable;
}
