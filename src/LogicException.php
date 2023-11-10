<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class LogicException extends \LogicException
{
    use Exceptionable;
}
