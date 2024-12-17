<?php

namespace App\Http\Controllers;

use App\Interfaces\BannerRepositoryInterface;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private BannerRepositoryInterface $bannerRepository;
    private ProductCategoryRepositoryInterface $productCategoryRepository;
    private ProductRepositoryInterface $productRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        BannerRepositoryInterface $bannerRepository,
        ProductCategoryRepositoryInterface $productCategoryRepository
        ) {
        $this->bannerRepository = $bannerRepository;
        $this->productRepository = $productRepository;
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function index(){
        $banners = $this->bannerRepository->getAllBanners();
        $categories = $this->productCategoryRepository->getAllProductCategories();
        $populars = $this->productRepository->getAllPopularProducts();

        //compact digunakan untuk melempar data ke sebuah view
        return view('pages.home', compact('banners', 'categories', 'populars'));
    }

}
