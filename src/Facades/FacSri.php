<?php

namespace SamDeimos\FacSri\Facades;

use Illuminate\Support\Facades\Facade;

class FacSri extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'facsri';
    }
}
