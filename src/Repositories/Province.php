<?php


namespace Cafesource\Location\Repositories;

use Cafesource\Location\Repositories\Location as LocationRepository;

class Province extends LocationRepository
{
    protected $model = null;

    public function __construct( $province )
    {
        $this->model = new $province();
    }

    protected function model()
    {
        return $this->model;
    }
}