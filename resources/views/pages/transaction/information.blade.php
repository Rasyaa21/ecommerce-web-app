@extends('layouts.app')

@section('content')

     <!-- breadcrumb-area start -->
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
                                <li class="breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <form action="{{ route('transaction.save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <input type="hidden" class="product_id" name="product_id" id="product_id" value="{{ $product->id }}">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}" required />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Address</label>
                                        <textarea class="form-content" name="address" id="" cols="30" rows="10" required>{{ old('address') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Place Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <li>
                                            <span class="order-middle-left">{{ $product->name }}</span>
                                            <span class="order-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>Rp {{ number_format($product->price, 0, ',', '.') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->
@endsection
