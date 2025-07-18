@extends('frontend/layout/app')
@section('content')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="owl-carousel owl-banner">
                                <div class="item header-text">
                                    <h6>Welcome to Startex</h6>
                                    <h2>Turn <em>great ideas</em> into <span>powerful marketing</span></h2>
                                    <p>We turn strategy into sales — creative marketing that drives real results and helps
                                        your business grow.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="{{ route('contact') }}">Message Us Now</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i>+92-42-35782381 / 2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item header-text">
                                    <h6>Online Marketing</h6>
                                    <h2>Get the <em>best ideas</em> for <span>your website</span></h2>
                                    <p>You are NOT allowed to redistribute this template ZIP file on any Free CSS collection
                                        websites. Contact us for more info. Thank you.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#services">Our Services</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i> 090-080-0760</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item header-text">
                                    <h6>Video Tutorials</h6>
                                    <h2>Watch <em>our videos</em> for your <span>projects</span></h2>
                                    <p>Please <a rel="nofollow" href="https://www.paypal.me/templatemo"
                                            target="_blank">support us</a> a little via PayPal if this digital marketing
                                        HTML template is useful for you. Thank you.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#video">Watch Videos</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i> 050-040-0320</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="services-right-dec">
            <img src="assets/images/services-right-dec.png" alt="">
        </div>
        <div class="container">
            <div class="services-left-dec">
                <img src="assets/images/services-left-dec.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>We <em>Provide</em> The Best Service With <span>Our Tools</span></h2>
                        <span>Our Services</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item border p-3 rounded shadow-sm h-100">
                            <h4>{{ $service->name }}</h4>
                            <div class="icon mb-2">
                                <img src="{{ asset('storage/' . $service->icon) }}" alt=""
                                    style="width: 60px; height: 60px;">
                            </div>
                            <hr class="mt-3">
                            {{-- List subcategories --}}
                            @if ($service->subservice->count())
                                <ul class="subservice-list ps-3">
                                    @foreach ($service->subservice as $sub)
                                        <li>{{ $sub->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">No subcategories available.</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.png" alt="Two Girls working together">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Grow your business with our <em>Marketing Solutions</em> & <span>Customer Experience</span>
                            Management</h2>
                        <p>With 25+ years of experience, Startex helps businesses enhance customer experience, boost
                            efficiency,
                            and ensure brand compliance—making us a trusted partner for performance and quality</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-01.png" alt="">
                                        </div>
                                        <div class="count-digit">20+</div>
                                        <div class="count-title">Services in Market</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-02.png" alt="">
                                        </div>
                                        <div class="count-digit">10+</div>
                                        <div class="count-title">Product In Market</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-03.png" alt="">
                                        </div>
                                        <div class="count-digit">120</div>
                                        <div class="count-title">Satisfied Clients</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="portfolio-left-dec">
            <img src="assets/images/portfolio-left-dec.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our Recent <em>Projects</em> &amp; Case Studies <span>for Clients</span></h2>
                        <span>Our Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- <pre>{{ print_r($product, true) }}</pre> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-portfolio">


                        @foreach ($product as $products)
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('storage/' . $products->image) }}" style="height: 270px"
                                        alt="">
                                    <div class="hover-effect">
                                        <div class="inner-content">
                                            <a rel="sponsored" href="#" target="_parent">
                                                <h4>{{ $products->name }}</h4>
                                            </a>
                                            <span>Plot Listing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="subscribe" class="subscribe">
        <div class="container">
            <div id="clientLogoCarousel" class="carousel slide carousel-fade py-5" data-bs-ride="carousel"
                data-bs-interval="3000">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <div class="section-heading">
                                <h2><span>Our Clients</span></h2>
                                <span>Our Trusted Clients</span>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-inner py-3 text-center">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center gap-4 flex-wrap">
                                <img src="{{ asset('assets/images/clients/audio1.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 1">
                                <img src="{{ asset('assets/images/clients/audio2.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 2">
                                <img src="{{ asset('assets/images/clients/audio3.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 3">
                                <img src="{{ asset('assets/images/clients/audio4.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 4">
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center gap-4 flex-wrap">
                                <img src="{{ asset('assets/images/clients/bank1.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 5">
                                <img src="{{ asset('assets/images/clients/bank2.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 6">
                                <img src="{{ asset('assets/images/clients/bank3.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 7">
                                <img src="{{ asset('assets/images/clients/bank4.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 8">
                                <img src="{{ asset('assets/images/clients/bank5.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 5">
                                <img src="{{ asset('assets/images/clients/bank6.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 6">
                                <img src="{{ asset('assets/images/clients/bank7.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 7">
                                <img src="{{ asset('assets/images/clients/bank8.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 8">
                                <img src="{{ asset('assets/images/clients/bank9.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 5">
                                <img src="{{ asset('assets/images/clients/bank10.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 6">
                                <img src="{{ asset('assets/images/clients/bank11.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 7">
                                <img src="{{ asset('assets/images/clients/bank12.webp') }}" class="img-fluid"
                                    style="height: 80px; width: 80px;" alt="Logo 8">

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>


    <div id="subscribe" class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h2>Know Your Website SEO Score by Email</h2>
                                <form id="subscribe" action="" method="get">
                                    <input type="text" name="website" id="website" placeholder="Your Website URL"
                                        required="">
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required="">
                                    <button type="submit" id="form-submit" class="main-button ">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="footer-dec">
        <img src="assets/images/footer-dec.png" alt="">
    </div>
@endsection
