<?php

namespace App\Repositories;

use App\Interfaces\BannerRepositoryInterface;
use App\Models\Banner;

class BannerRepository implements BannerRepositoryInterface {
    public function getAllBanners()
    {
        return Banner::all();
    }
}
