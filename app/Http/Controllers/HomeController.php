<?php

namespace App\Http\Controllers;

use App\Interfaces\BannerRepositoryInterface;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private BannerRepositoryInterface $bannerRepository;
    private ProductCategoryRepositoryInterface $productCategoryRepository;

    public function __construct(
        BannerRepositoryInterface $bannerRepository,
        ProductCategoryRepositoryInterface $productCategoryRepository
        ) {
        $this->bannerRepository = $bannerRepository;
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function index(){
        $banners = $this->bannerRepository->getAllBanners();
        $categories = $this->productCategoryRepository->getAllProductCategories();

        //compact digunakan untuk melempar data ke sebuah view
        return view('pages.home', compact('banners', 'categories'));
    }
}
