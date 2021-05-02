<?php

namespace Cafesource\Location;

use Cafesource\Foundation\Facades\Cafesource;
use Cafesource\Location\Repositories\Province as ProvinceRepository;

/**
 * Class Province
 *
 * @package Cafesource\Location
 */
class Province extends Location
{
    protected ?ProvinceRepository $repository = null;
    protected                     $autoload   = null;

    public function __construct( $config )
    {
        $this->setConfig($config);
        $this->repository = new ProvinceRepository($this->config[ 'province' ][ 'model' ]);
        $this->autoload   = Cafesource::autoload('provinces');
    }

    protected function repository() : ?ProvinceRepository
    {
        return $this->repository;
    }
}
