<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class RangeException extends \RangeException
{
    use Exceptionable;
}
