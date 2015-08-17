<?php namespace Microffice\Units;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Microffice\Units\UnitHandler
 */
class Unit extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Microffice\Contracts\Units\Unit';
    }
}