<?php

namespace App\Interfaces;

interface ProductCategoryRepositoryInterface{
    public function getAllProductCategories();
    public function getProductCategoryByName(string $name);
}
