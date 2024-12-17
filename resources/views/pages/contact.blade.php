@extends('layouts.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box align-items-center">
                    <div class="text-center col-lg-6 col-md-6 col-sm-12 text-md-start">
                        <h2 class="breadcrumb-title">Contact Us</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="text-center breadcrumb-list text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- contact area start -->
<div class="contact-area pb-100px pt-100px">
    <div class="container">
        <div class="contact-map mb-50px">
            <div id="mapid" data-aos="fade-up" data-aos-delay="200">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-row-2 row">
            <div class="col-lg-4 col-md-5 mb-lm-60px col-sm-12 col-xs-12 w-sm-100">
                <div class="contact-info-wrap">
                    <h2 class="title" data-aos="fade-up" data-aos-delay="200">Contact Info</h2>
                    <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info-inner">
                            <span class="sub-title">Phone:</span>
                        </div>
                        <div class="contact-info-dec">
                            <p><a href="tel:+012345678102">+012 345 678 102</a></p>
                            <p><a href="tel:+012345678102">+012 345 678 102</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info-inner">
                            <span class="sub-title">Email:</span>
                        </div>
                        <div class="contact-info-dec">
                            <p><a href="mailto://urname@email.com">urname@email.com</a></p>
                            <p><a href="mailto://urwebsitenaem.com">urwebsitenaem.com</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info-inner">
                            <span class="sub-title">Address:</span>
                        </div>
                        <div class="contact-info-dec">
                            <p>Address goes here,</p>
                            <p>street, Crossroad 123.</p>
                        </div>
                    </div>
                    <div class="contact-social">
                        <h3 class="title" data-aos="fade-up" data-aos-delay="200">Follow Us</h3>
                        <div class="social-info" data-aos="fade-up" data-aos-delay="200">
                            <ul class="d-flex">
                                <li>
                                    <a href="#"><i class="icon-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-social-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-social-google"></i></a>
                                </li>
                                <li>
                                    <a class="m-0" href="#"><i class="icon-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                <div class="contact-form">
                    <div class="contact-title mb-30">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="200">Get In Touch</h2>
                    </div>
                    <form class="contact-form-style" id="contact-form" action="https://htmlmail.hasthemes.com/nazmul/mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                <input name="name" placeholder="Name*" type="text" />
                            </div>
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                <input name="email" placeholder="Email*" type="email" />
                            </div>
                            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                <input name="subject" placeholder="Subject*" type="text" />
                            </div>
                            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                <textarea name="message" placeholder="Your Message*"></textarea>
                                <button class="mt-4 btn btn-primary btn-hover-dark" data-aos="fade-up" data-aos-delay="200" type="submit">SEND</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
