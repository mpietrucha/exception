<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class OutOfBoundsException extends \OutOfBoundsException
{
    use Exceptionable;
}
