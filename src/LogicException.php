<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class LogicException extends \LogicException
{
    use Exceptionable;
}
