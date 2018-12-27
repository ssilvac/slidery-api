<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'location', 'city_id', 'is_primary'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
