<?php

namespace Cafesource\Location\Facades;

use Illuminate\Support\Facades\Facade;
use Cafesource\Location\City as CityModule;

/**
 * Class City
 *
 * @method static bool has(int $id)
 * @method static mixed all()
 * @method static mixed first(int $id)
 * @method static mixed get(mixed $id)
 * @method static bool remove(mixed $id)
 * @method static bool update(int $id, array $data)
 * @method static mixed province(int $id)
 *
 * @package Cafesource\Location\Facades
 */
class City extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CityModule::class;
    }
}
