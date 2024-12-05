@extends('layouts.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box align-items-center">
                    <div class="text-center col-lg-6 col-md-6 col-sm-12 text-md-start">
                        <h2 class="breadcrumb-title">Shop</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="text-center breadcrumb-list text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Shop Category pages -->
<div class="shop-category-area pb-100px pt-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <p>There Are {{ $products->count() }} Products.</p>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex align-items-center">
                        <div class="shot-product">
                            <p>Sort By:</p>
                        </div>
                        <div class="shop-select">
                            <select class="shop-sort">
                                <option data-display="Relevance">Relevance</option>
                                <option value="1"> Name, A to Z</option>
                                <option value="2"> Name, Z to A</option>
                                <option value="3"> Price, low to high</option>
                                <option value="4"> Price, high to low</option>
                            </select>

                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area">

                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                            <!-- Single Prodect -->
                            <div class="product mb-25px">
                                <div class="thumb">
                                    <a href="shop-left-sidebar.html" class="image">
                                        <img src="{{ asset('storage/' . $product->images->where('is_thumbnail', true)->first()->image) }}" alt="Product" />
                                        <img class="hover-image" src="{{ asset('storage/' . $product->images->where('is_thumbnail', true)->first()->image) }}" alt="Product" />
                                    </a>
                                    @if ($product->is_new)
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    @endif
                                    <button title="Add To Cart" class=" add-to-cart">Add To Cart</button>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="shop-left-sidebar.html">{{ $product->name }}</a></h5>
                                    <span class="price">
                                        <span class="new">Rp{{ number_format($product->price, 0, ',', '.') }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                <div class="shop-sidebar-wrap">
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-category">
                        <ul>
                            <li>
                                <a href="{{ route('product.index') }}"
                                    class="{{ request()->routeIs('product.index') && request()->category == null ? 'selected' : '' }}">
                                    All
                                    <span>({{ $products->count() }})</span>
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                {{-- {{ $category->products->count() }} dia akan menghitung jumlah relasi product di category tersebut --}}
                                <li>
                                    {{-- ketika anchor di click dia akan load halaman dan juga category nya di tambahkan --}}
                                    <a href="{{ route('product.index', ['category' => $category->name]) }}"
                                        class="{{ request()->category == $category->name ? 'selected' : '' }}">
                                        {{ $category->name }}
                                        <span>({{ $category->products->count() }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
