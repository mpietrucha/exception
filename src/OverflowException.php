<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class OverflowException extends \OverflowException
{
    use Exceptionable;
}
