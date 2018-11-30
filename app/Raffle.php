<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'raffles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prize_id', 'date'
    ];

    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }

    public function winner()
    {
        return $this->hasMany(Winner::class);
    }
}
