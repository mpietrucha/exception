<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class OutOfRangeException extends \OutOfRangeException
{
    use Exceptionable;
}
