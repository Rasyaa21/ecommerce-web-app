<div class="header section">
    <!--   Bottom  Start -->
    <div class="header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-self-center">
                <!-- Header Logo Start -->
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href="{{ route('home') }}"><img src="{{  asset('assets/images/logo/logo.png')  }}" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Action Start -->
                <div class="col align-self-center">
                    <div class="header-actions">
                        <div class="header_account_list">
                            <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                    class="icon-magnifier"></i></a>
                            <div class="dropdown_search">
                                <form class="action-form" action="{{ route('product.index') }}">
                                    <input class="form-control" placeholder="Enter your search key" type="text" name="search">
                                    <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <a href="#offcanvas-cart" class="pr-0 header-action-btn header-action-btn-cart offcanvas-toggle">
                            <i class="icon-handbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </div>
                <!-- Header Action End -->
            </div>
        </div>
    </div>
    <!-- Header Bottom  End -->
    <!-- Header Bottom  Start -->
    <div class="bg-white header-bottom d-lg-none sticky-nav">
        <div class="container position-relative">
            <div class="row align-self-center">
                <!-- Header Logo Start -->
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{  asset('assets/images/logo/logo.png')  }}" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Action Start -->
                <div class="col align-self-center">
                    <div class="header-actions">
                        <div class="header_account_list">
                            <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                    class="icon-magnifier"></i></a>
                            <div class="dropdown_search">
                                <form class="action-form" action="#">
                                    <input class="form-control" placeholder="Enter your search key" type="text">
                                    <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <a href="#offcanvas-cart" class="pr-0 header-action-btn header-action-btn-cart offcanvas-toggle">
                            <i class="icon-handbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </div>
                <!-- Header Action End -->
            </div>
        </div>
    </div>
    <!-- Header Bottom  End -->
    <!-- Main Menu Start -->
    <div class="bg-black d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="main-menu">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About us</a></li>
                            <li class="{{ request()->routeIs('product.index') ? 'active' : '' }}"><a href="{{ route('product.index') }}">Shop</a></li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu End -->
</div>
