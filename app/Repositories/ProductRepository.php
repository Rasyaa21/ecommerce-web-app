<?php

namespace App\Repositories;

use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductRepository implements ProductRepositoryInterface{
    private ProductCategoryRepositoryInterface $productCatRepo;
    public function __construct(ProductCategoryRepositoryInterface $productCatRepo) {
        $this->productCatRepo = $productCatRepo;
    }
    public function getAllProducts(?string $category, ?string $search)
    {
        if ($search){
            return Product::where('name', 'like', '%' . $search . '%')->get();
        }
        if ($category){
            $productCategory = $this->productCatRepo->getProductCategoryByName($category);

            if (!$productCategory){
                return abort(404);
            }

            return Product::where('product_category_id', $productCategory->id)->get();
        }
        return Product::all();
    }
}
