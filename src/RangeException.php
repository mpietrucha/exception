<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class RangeException extends \RangeException
{
    use Exceptionable;
}
