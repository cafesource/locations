<?php

namespace Cafesource\Location;

use Cafesource\Foundation\Facades\Cafesource;
use Cafesource\Location\Repositories\City as CityRepository;

class City extends Location
{
    protected ?CityRepository $repository = null;
    protected                 $autoload   = null;

    public function __construct( $config )
    {
        $this->setConfig($config);
        $this->repository = new CityRepository($this->config[ 'city' ][ 'model' ]);
        $this->autoload   = Cafesource::autoload('cities');
    }

    protected function repository() : ?CityRepository
    {
        return $this->repository;
    }

    public function province( $id )
    {
        return $this->repository()->province($id);
    }
}
