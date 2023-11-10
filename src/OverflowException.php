<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class OverflowException extends \OverflowException
{
    use Exceptionable;
}
