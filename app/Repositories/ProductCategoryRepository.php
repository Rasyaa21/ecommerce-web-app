<?php

namespace App\Repositories;

use App\Filament\Resources\ProductCategoryResource;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Models\ProductCategory;

class ProductCategoryRepository implements ProductCategoryRepositoryInterface{
    public function getAllProductCategories(){
        return ProductCategory::all();
    }

    
}
