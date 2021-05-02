<?php


namespace Cafesource\Location\Facades;

use Illuminate\Support\Facades\Facade;
use Cafesource\Location\Province as ProvinceModule;

/**
 * Class Province
 *
 * @method static bool has(int $id)
 * @method static mixed all()
 * @method static mixed first(int $id)
 * @method static mixed get(mixed $id)
 * @method static bool remove(mixed $id)
 * @method static bool update(int $id, array $data)
 *
 * @package Cafesource\Location\Facades
 */
class Province extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ProvinceModule::class;
    }
}
