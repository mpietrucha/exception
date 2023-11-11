<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class OutOfRangeException extends \OutOfRangeException
{
    use Exceptionable;
}
