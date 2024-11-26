<?php

namespace App\Providers;

use App\Interfaces\BannerRepositoryInterface;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Repositories\BannerRepository;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(ProductCategoryRepositoryInterface::class, ProductCategoryRepository::class);
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
