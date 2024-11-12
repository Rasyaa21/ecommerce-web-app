<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    protected $fillable = [
        'code',
        'discount_type',
        'discount_amount',
        'valid_until',
        'is_used'
    ];

    protected $casts = [
        'is_used' => 'boolean'
    ];

    public function product()
    {
        //1 promo dapat dimiliki oleh 1 transaksi
        return $this->hasOne(Transaction::class);
    }
}
