<?php

namespace Cafesource\Location\Models;

use Illuminate\Database\Eloquent\Model;
use Cafesource\Location\Models\Province;

class City extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'province_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
