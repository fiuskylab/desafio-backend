<?php

namespace App\Traits;

/**
 * Trait HttpStatus
 * Following MDN: https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
 * @package App\Traits
 */
trait HttpStatus
{
    /**
     * @return int
     */
    protected function getForbidden() : int
    {
        return 403;
    }

    /**
     * @return int
     */
    protected function getCreated(): int
    {
        return 201;
    }

    /**
     * @return int
     */
    protected function getOk(): int
    {
        return 200;
    }
}
