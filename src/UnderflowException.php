<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class UnderflowException extends \UnderflowException
{
    use Exceptionable;
}
