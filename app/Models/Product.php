<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_category_id',
        'name',
        'description',
        'price',
        'slug',
        'is_new',
        'is_popular'
    ];

    //biar bisa dipake booleannya
    protected $casts = [
        'is_new' => 'boolean',
        'is_popular' => 'boolean',
    ];

    public function productCategory(){
        //belongto = memiliki 1 category
        return $this->belongsTo(ProductCategory::class);
    }

    public function images(){
        //1 produk dapat memiliki banyak image
        return $this->hasMany(ProductImage::class);
    }
    /**
     * Get all of the banners for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    /**
     * Get all of the transactions for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
