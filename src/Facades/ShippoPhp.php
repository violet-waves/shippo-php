<?php

namespace VioletWaves\ShippoPhp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VioletWaves\ShippoPhp\ShippoPhp
 */
class ShippoPhp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VioletWaves\ShippoPhp\ShippoPhp::class;
    }
}
