@extends('layouts.app')

@section('content')
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        @foreach ($product->images as $image)
                            <div class="swiper-slide zoom-image-hover">
                                <img class="m-auto img-responsive" src="{{ asset('storage/' . $image->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-2 swiper-container zoom-thumbs slider-nav-style-1 small-nav mb-15px">
                    <div class="swiper-wrapper">
                        @foreach ($product->images as $image)
                        <div class="swiper-slide">
                            <img class="m-auto img-responsive" src="{{ asset('storage/' . $image->image) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="product-details-content quickview-content">
                    <h2>{{ $product->name }}</h2>
                    <p class="reference">Category:<span> {{ $product->productCategory->name }}</span></p>
                    <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                    </div>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut">Rp {{ number_format($product->price, 0, ',', '.') }}</li>
                        </ul>
                    </div>
                    <p class="m-0 quickview-para">{!! $product->description !!}</p>
                    <div class="pro-details-quality">
                        <div class="pro-details-cart">
                            <button class="add-cart btn btn-primary btn-hover-primary" href="#"> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
