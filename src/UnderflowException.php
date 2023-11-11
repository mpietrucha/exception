<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class UnderflowException extends \UnderflowException
{
    use Exceptionable;
}
