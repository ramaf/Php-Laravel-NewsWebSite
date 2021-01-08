@extends('layouts.home')

@section('title', 'News Website')

@section('description')
    See the breaking news!
@endsection

@section('keywords','News, Latest News, Breaking News')
@include('home._header')
@include('home._slider')

@section('content')
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="{{asset('assets')}}/images/about.png" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>About Us</h3>
                        <span>Our Mobile Shop</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{asset('assets')}}/images/1.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{asset('assets')}}/images/2.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{asset('assets')}}/images/3.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="brand_box">
                            <img src="{{asset('assets')}}/images/4.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="{{asset('assets')}}/images/5.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="{{asset('assets')}}/images/6.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                            <i><img src="{{asset('assets')}}/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>what say our clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="{{asset('assets')}}/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="{{asset('assets')}}/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="{{asset('assets')}}/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact us</h2>
                    </div>
                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


