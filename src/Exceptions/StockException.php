<?php

namespace Kvostyc\PrintForgeStock\Exceptions;

use Exception;

class StockException extends Exception
{
    protected int $statusCode;

    public function __construct(string $message, int $statusCode = 500)
    {
        parent::__construct($message);

        $this->statusCode = $statusCode;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
