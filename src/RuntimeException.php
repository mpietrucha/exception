<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class RuntimeException extends \RuntimeException
{
    use Exceptionable;
}
