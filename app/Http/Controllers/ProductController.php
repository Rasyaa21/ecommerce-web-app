<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepo;
    private ProductCategoryRepositoryInterface $productCatRepo;

    public function __construct(
        ProductRepositoryInterface $productRepo,
        ProductCategoryRepositoryInterface $productCatRepo
        )
    {
        $this->productRepo = $productRepo;
        $this->productCatRepo = $productCatRepo;
    }
    public function index(Request $req)
    {
        $products = $this->productRepo->getAllProducts($req->category, $req->search);
        $categories = $this->productCatRepo->getAllProductCategories();

        return view('pages.product.index', compact('products', 'categories'));
    }


    public function show(string $slug){
        $product = $this->productRepo->getProductBySlug($slug);

        return view('pages.product.show', compact('product'));
    }
}
