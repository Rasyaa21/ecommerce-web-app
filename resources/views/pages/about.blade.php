@extends('layouts.app')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box align-items-center">
                    <div class="text-center col-lg-6 col-md-6 col-sm-12 text-md-start">
                        <h2 class="breadcrumb-title">About Us</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="text-center breadcrumb-list text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- About Us Area Start -->
<section class="about-area pb-100px pt-100px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left-image mb-md-30px mb-lm-30px" data-aos="fade-up">
                    <img src="assets/images/about-image/1.jpg" alt="" class="img-responsive w-100" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-title" data-aos="fade-up">
                        <h2>Welcome To Furns</h2>
                    </div>
                    <p class="mb-30px" data-aos="fade-up" data-aos-delay="200">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur
                        voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus
                        dolorum voluptate, animi libero officiis eveniet accusamus recusandae. Temporibus
                        amet ducimus sapiente voluptatibus autem dolorem magnam quas, porro suscipit. Quibusdam
                        culpa asperiores exercitationem architecto quo distinctio sed dolorem!
                    </p>
                    <p data-aos="fade-up" data-aos-delay="300">
                        Sint voluptatum beatae necessitatibus quos mollitia vero, optio asperiores aut tempora iusto
                        eum rerum, possimus, minus quidem ut saepe laboriosam. Praesentium aperiam accusantium minus
                        repellendus laudantium provident quod recusandae exercitationem natus
                        dignissimos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End -->
<!-- Start Slill Progress -->
<div class="progressbar-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content" data-aos="fade-up" data-aos-delay="0">
                    <h4 class="title">Functionality meets perfection</h4>
                    <p class="title-desc">In today’s day and age, one cannot underestimate the importance of design, the art of
                        creating striking visuals to move and captivate your audience. And as the world becomes more
                        and more digitized with each passing second, the importance of graphic design has been
                        rocketed to the top.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-progress m-t-40">
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="0">
                        <h6 class="font--semi-bold m-b-15">UI/UX</h6>
                        <div class="line-progressbar" data-percentage="75" data-progress-color="#ff7004"></div>
                    </div>
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="200">
                        <h6 class="font--semi-bold m-b-15">Ideas</h6>
                        <div class="line-progressbar" data-percentage="86" data-progress-color="#ff7004"></div>
                    </div>
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                        <h6 class="font--semi-bold m-b-15">Design</h6>
                        <div class="line-progressbar" data-percentage="97" data-progress-color="#ff7004"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slill Progress -->
<div class="banner-preduct-wrapper pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="pr-0 col-lg-8 col-md-8">
                <div class="banner-product-image">
                    <a class="venobox " href="assets/images/banner/8.jpg" data-gall="myGallery">
                        <img src="assets/images/banner/8.jpg" class="img-fluid w-100" alt="Banner images">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-product-image mt-lm-15px">
                    <a class="venobox " href="assets/images/banner/9.jpg" data-gall="myGallery">
                        <img src="assets/images/banner/9.jpg" class="img-fluid w-100" alt="Banner images">
                    </a>
                </div>
                <div class="mt-3 banner-product-image">
                    <a class="venobox " href="assets/images/banner/10.jpg" data-gall="myGallery">
                        <img src="assets/images/banner/10.jpg" class="img-fluid w-100" alt="Banner images">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Start  Team Section    -->
<div class="team-section">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center section-title">
                        <h2 class="title">Meet Our Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Content Text Area -->
    <div class="team-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-25px">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="0">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/images/team/leader1.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="mt-5 team-name font--bold">Ms. Veronica</h6>
                            <span class="team-title">Web Designer</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-25px">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/images/team/leader2.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="mt-5 team-name font--bold">Missa Santos</h6>
                            <span class="team-title">CEO Founder</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-25px">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/images/team/leader3.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="mt-5 team-name font--bold">Missa Santos</h6>
                            <span class="team-title">Chief Officer</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-25px">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="600">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/images/team/leader4.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="mt-5 team-name font--bold">Lisa Antonia</h6>
                            <span class="team-title">CTO</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   End  Team Section   -->

<!-- Start Company Logo Section -->
<div class="company-logo-section pt-100px pb-100px">
    <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company-logo-slider slider-nav-style-1">
                        <!-- Slider main container -->
                        <div class="swiper-container company-logo-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-1.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-2.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-3.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-4.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-5.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-6.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-7.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="assets/images/company-logo/company-logo-8.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Company Logo Section -->
@endsection
