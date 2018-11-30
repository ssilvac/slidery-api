<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recharges';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wallet_id', 'quantity_coupons', 'price'
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
