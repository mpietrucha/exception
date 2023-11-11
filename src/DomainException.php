<?php

namespace Mpietrucha\Support\Exception;

use Mpietrucha\Support\Exception\Concerns\Exceptionable;

class DomainException extends \DomainException
{
    use Exceptionable;
}
