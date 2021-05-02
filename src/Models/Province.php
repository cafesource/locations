<?php

namespace Cafesource\Location\Models;

use Cafesource\Location\Models\City;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
