<?php

namespace App\Http\Controllers;

use App\Interfaces\BannerRepositoryInterface;
use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private BannerRepositoryInterface $bannerRepository;

    public function __construct(BannerRepositoryInterface $bannerRepository) {
        $this->bannerRepository = $bannerRepository;
    }

    public function index(){
        $banners = $this->bannerRepository->getAllBanners();

        //compact digunakan untuk melempar data ke sebuah view
        return view('pages.home', compact('banners'));
    }
}
