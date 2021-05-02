<?php

use Cafesource\Location\Facades\City;
use Cafesource\Location\Facades\Province;

if ( !function_exists('getProvinces') ) {
    /**
     * @return array|mixed|object|string|null
     */
    function getProvinces()
    {
        return Province::all();
    }
}

if ( !function_exists('getProvince') ) {
    /**
     * Get Province information
     *
     * @param $id
     *
     * @return mixed
     */
    function getProvince( $id )
    {
        return Province::first($id);
    }
}

if ( !function_exists('getCities') ) {
    /**
     * Get all cities
     *
     * @return mixed
     */
    function getCities()
    {
        return City::all();
    }
}

if ( !function_exists('getCity') ) {
    /**
     * Get city information
     *
     * @param $id
     *
     * @return mixed
     */
    function getCity( $id )
    {
        return City::first($id);
    }
}

if ( !function_exists('getProvinceCities') ) {
    /**
     * @param $provinceId
     *
     * @return mixed
     */
    function getProvinceCities( $provinceId )
    {
        return City::province($provinceId);
    }
}
