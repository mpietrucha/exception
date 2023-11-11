<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class LengthException extends \LengthException
{
    use Exceptionable;
}
