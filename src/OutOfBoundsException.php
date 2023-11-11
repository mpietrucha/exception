<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class OutOfBoundsException extends \OutOfBoundsException
{
    use Exceptionable;
}
