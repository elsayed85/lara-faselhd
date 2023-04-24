<?php

namespace Elsayed85\FaselHd\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elsayed85\FaselHd\FaselHd
 */
class FaselHd extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Elsayed85\FaselHd\FaselHd::class;
    }
}
