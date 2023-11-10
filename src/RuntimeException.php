<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class RuntimeException extends \RuntimeException
{
    use Exceptionable;
}
