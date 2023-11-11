<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class UnexpectedValueException extends \UnexpectedValueException
{
    use Exceptionable;
}
