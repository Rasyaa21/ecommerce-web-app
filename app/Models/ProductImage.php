<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image',
        'is_thumbnail'
    ];

    //casts berfungsi untuk megolah informasi mentah
    protected $casts = [
        'is_thumbnail' => 'boolean'
    ];

    public function user()
    {
        // 1 gambar dapat dimiliki satu produc
        return $this->belongsTo(Product::class);
    }
}
