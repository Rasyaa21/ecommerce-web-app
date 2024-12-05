{{-- menggunakan layout --}}
@extends('layouts.app')
@section('content')
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1 dot-color-white">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                <div class="text-center hero-slide-item slider-height-2 swiper-slide d-flex">
                    <div class="hero-bg-image">
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="">
                    </div>
                    <div class="container align-self-center">
                        <div class="row justify-content-center">
                            <div class="m-auto col-md-8 offset-2 align-self-center">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <span class="category">New Products</span>
                                    <h2 class="title-1">{{ $banner->product->name }}</h2>
                                    <p class="w-100">{{ $banner->product->description }}</p>
                                    <a href="#" class="mt-5 btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Single slider item -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->
    <div class="section pt-100px pb-100px">
        <div class="container">
            <div class="category-slider swiper-container" data-aos="fade-up">
                <div class="category-wrapper swiper-wrapper">
                    @foreach ($categories as $category)
                        <div class=" swiper-slide">
                            <a href="{{ route('product.index', ['category' => $category->name]) }}" class="category-inner ">
                                <div class="category-single-item">
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="">
                                    <span class="title">{{ $category->name }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
