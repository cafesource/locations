<?php

namespace Cafesource\Location;

abstract class Location
{
    protected $config = null;

    /**
     * @param null $config
     */
    public function setConfig( $config ) : void
    {
        $this->config = $config;
    }

    abstract protected function repository();

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function has( int $id )
    {
        return $this->repository()->exists($id);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->repository()->all();
    }

    /**
     * @param $key
     *;
     *
     * @return mixed
     */
    public function first( $key, $default = null )
    {
        if ( $this->autoload->has($key) )
            return $this->autoload->get($key);

        if ( is_string($key) ) {
            $value = $this->repository()->findByName($key);
        } else {
            $value = $this->repository()->findById($key);
        }

        if ( $value ) {
            $this->autoload->set($key, $value);
            return $value;
        }

        return $default;
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    public function get( $data )
    {
        if ( is_array($data) )
            return $this->repository()->findByIds($data);

        return $this->repository()->findById($data);
    }

    /**
     * @param int $id
     * @param     $data
     *
     * @return mixed
     */
    public function update( int $id, $data )
    {
        return $this->repository()->update($id, $data);
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    public function remove( $data )
    {
        if ( is_array($data) )
            return $this->repository()->destroy($data);

        return $this->repository()->remove($data);
    }
}