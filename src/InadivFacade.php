<?php

namespace Konnco\Inadiv;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Konnco\Inadiv\Inadiv
 */
class InadivFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-inadiv';
    }
}
