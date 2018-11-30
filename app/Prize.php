<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prizes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function raffle()
    {
        return $this->hasOne(Raffle::class);
    }
}
