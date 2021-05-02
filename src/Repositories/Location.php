<?php

namespace Cafesource\Location\Repositories;

abstract class Location
{
    abstract protected function model();

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model()->all();
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public function exists( int $id ) : bool
    {
        return $this->model()->where('id', $id)->exists();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function findById( int $id )
    {
        return $this->model()->find($id);
    }

    /**
     * @param $ids
     *
     * @return mixed
     */
    public function findByIds( $ids )
    {
        return $this->model()->whereIn('id', $ids)->get();
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findByName( string $name )
    {
        return $this->model()->where('name', $name)->first();
    }

    /**
     * @param $id
     * @param $data
     *
     * @return mixed
     */
    public function update( $id, $data )
    {
        return $this->model()->where('id', $id)->update($data);
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function remove( int $id )
    {
        return $this->model()->where('id', $id)->delete();
    }

    /**
     * @param $ids
     *
     * @return mixed
     */
    public function destroy( $ids )
    {
        return $this->model()->whereIn('id', $ids)->delete();
    }
}
