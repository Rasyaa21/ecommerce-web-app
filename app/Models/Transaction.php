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
        'product_id',
        'address',
        'promo_code_id',
        'sub_total',
        'grand_total',
        'payment_status'
    ];

    public function promoCode()
    {
        //1 transaksi memiliki 1 promo
        return $this->belongsTo(PromoCode::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
