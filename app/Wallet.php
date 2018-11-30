<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wallets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'quantity_coupons', 'price'
    ];

    public function recharges()
    {
        return $this->hasMany(Recharge::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
