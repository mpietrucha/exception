<?php

namespace Mpietrucha\Exception;

use Mpietrucha\Exception\Concerns\Exceptionable;

class DomainException extends \DomainException
{
    use Exceptionable;
}
