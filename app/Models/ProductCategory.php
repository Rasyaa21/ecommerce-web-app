<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'name',
        'image',
        'sort_order'
    ];


    public function products(){
        //hasmany = memiliki banyak product
        return $this->hasMany(Product::class);
    }
}
