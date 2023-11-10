<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class LengthException extends \LengthException
{
    use Exceptionable;
}
