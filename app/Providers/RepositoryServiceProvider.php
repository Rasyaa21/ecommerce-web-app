<?php

namespace App\Providers;

use App\Interfaces\BannerRepositoryInterface;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\BannerRepository;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\ProductRepository;
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
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
