<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class UnexpectedValueException extends \UnexpectedValueException
{
    use Exceptionable;
}
