<?php

namespace Cafesource\Location\Repositories;

use Cafesource\Location\Repositories\Location as LocationRepository;

class City extends LocationRepository
{
    protected $model = null;

    public function __construct( $city )
    {
        $this->model = new $city();
    }

    /**
     * @return mixed|null
     */
    protected function model()
    {
        return $this->model;
    }

    /**
     * @param $provinceId
     *
     * @return mixed
     */
    public function province( int $provinceId )
    {
        return $this->model()->where('province_id', $provinceId)->get();
    }
}