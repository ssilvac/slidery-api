<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'region_id'
    ];

    public function region()
    {
        return $this->hasOne(Region::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }
}
