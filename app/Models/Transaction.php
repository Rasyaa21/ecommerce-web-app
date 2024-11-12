<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'code',
        'name',
        'email',
        'phone',
        'address',
        'promo_code_id',
        'sub_total',
        'grand_total'
    ];

    public function promo()
    {
        //1 transaksi memiliki 1 promo
        return $this->belongsTo(PromoCode::class);
    }

    public function details()
    {
        //1 transaksi bisa memiliki banyak detail
        return $this->hasMany(TransactionDetail::class);
    }
}
