<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }
    public function index()
    {
        $products = $this->productRepo->getAllProducts();
        return view('pages.product.index', compact('products'));
    }
}
