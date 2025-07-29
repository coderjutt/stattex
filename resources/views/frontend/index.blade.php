@extends('frontend/layout/app')
@section('content')
    <div class="main-banner" id="top" style="--dynamic-bg: url('{{ asset('assets/images/12.png') }}')">
        <!-- Right Wave -->
        <div class="wave-overlay right">
            <img src="{{ asset('assets/images/banner-layout.png') }}" alt="" srcset="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center custom-carousel">
                            <div class="owl-carousel owl-banner">
                                <div class="item header-text">
                                    <h6>Welcome to Startex</h6>
                                    <h2>Turn <em>great ideas</em> into <span>powerful marketing</span></h2>
                                    <p>We turn strategy into sales — creative marketing that drives real results and helps
                                        your business grow.</p>
                                    {{-- <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="{{ route('contact') }}">Message Us Now</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i>+92-42-35782381 / 2</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="item header-text">
                                    <h6>News</h6>
                                    <h2>Our <em>Latest <span>Updates</span></h2>
                                    <p>Startex has been conferred GOLD Membership by the Mystery Shopping Professionals
                                        Association
                                        (MSPA-AP) at the 19th annual conference in Hong Kong.</p>
                                </div>
                                <div class="item header-text">
                                    <h6>Technology</h6>
                                    <h2>Online <em>reporting system</em></h2>
                                    <p>Our online reporting system is a user-friendly, high-performance platform built to
                                        industry standards. It offers real-time data integration,
                                        customizable features, and clear,
                                        actionable insights—empowering clients to make informed decisions with ease.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center custom-carousel">
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
                                    <h6>News</h6>
                                    <h2>Our <em>Latest <span>Updates</span></h2>
                                    <p>Startex has been conferred GOLD Membership by the Mystery Shopping Professionals
                                        Association
                                        (MSPA-AP) at the 19th annual conference in Hong Kong.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#services">Our Services</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i>+92-42-35782381 / 2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item header-text">
                                    <h6>Technology</h6>
                                    <h2>Online <em>reporting system</em></h2>
                                    <p>Our online reporting system is a user-friendly, high-performance platform built to
                                        industry standards. It offers real-time data integration,
                                        customizable features, and clear,
                                        actionable insights—empowering clients to make informed decisions with ease.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="{{ route('about_us') }}">About Us</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i> +92-42-35782381 / 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <hr> --}}
    <div id="services" class="our-services sapce section">
        <div class="services-right-dec">
            <img src="assets/images/services-right-dec.png" alt="">
        </div>
        <div class="container">
            {{-- <div class="services-left-dec">
                <img src="assets/images/services-left-dec.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>We <em>Provide</em> The Best Service With <span>Our Tools</span></h2>
                        <span>Our Services</span>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-2 col-md-4 col-sm-6 custom_ser_item">
                        <div class="item border rounded shadow-sm">
                            <h4>{{ $service->name }}</h4>
                            <div class="icon mb-2">
                                <img src="{{ asset('storage/' . $service->icon) }}" alt=""
                                    style="width: 60px; height: 60px;">
                            </div>
                            {{-- <hr class="mt-3"> --}}
                            {{-- List subcategories --}}
                            {{-- @if ($service->subservice->count())
                                <ul class="subservice-list ps-3">
                                    @foreach ($service->subservice as $sub)
                                        <li>{{ $sub->name }}</li>
                                    @endforeach
                                </ul>
                            @else --}}
                            {{-- <p class="text-muted">No subcategories available.</p>
                            @endif --}}
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
                                <img src="{{ asset('assets/images/clients/audio1.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 1">
                                <img src="{{ asset('assets/images/clients/audio2.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 2">
                                <img src="{{ asset('assets/images/clients/audio3.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 3">
                                <img src="{{ asset('assets/images/clients/audio4.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 4">
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center gap-4 flex-wrap">
                                <img src="{{ asset('assets/images/clients/bank1.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 5">
                                <img src="{{ asset('assets/images/clients/bank2.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 6">
                                <img src="{{ asset('assets/images/clients/bank3.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 7">
                                <img src="{{ asset('assets/images/clients/bank4.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 8">
                                <img src="{{ asset('assets/images/clients/bank5.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 9">
                                <img src="{{ asset('assets/images/clients/bank6.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 10">
                                <img src="{{ asset('assets/images/clients/bank7.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 11">
                                <img src="{{ asset('assets/images/clients/bank8.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 12">
                                <img src="{{ asset('assets/images/clients/bank9.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 13">
                                <img src="{{ asset('assets/images/clients/bank10.webp') }}" class="img-fluid client-logo"
                                    alt="Logo 14">
                                {{-- <img src="{{ asset('assets/images/clients/bank11.webp') }}" class="img-fluid client-logo" alt="Logo 15">
                                <img src="{{ asset('assets/images/clients/bank12.webp') }}" class="img-fluid client-logo" alt="Logo 16"> --}}
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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h2>Subscribe Newsletters</h2>
                                <form id="subscribe" action="{{ route('subscribers.store') }}" method="post">
                                    @csrf
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


    <!-- Popup Modal -->
    <div class="modal fade" id="welcomePopup" tabindex="-1" aria-labelledby="welcomePopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomePopupLabel">Welcome to Startex</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    🚀 Get ready for powerful insights and real results!
                </div>
                <div class="modal-footer">
                    <a href="{{route('product')}}" class="btn btn-success">Lets Go</a>
                    {{-- <button type="button" class="btn btn-success" data-bs-dismiss="modal">Let's Go</button> --}}
                </div>
            </div>
        </div>
    </div>


    <div class="footer-dec">
        <img src="assets/images/footer-dec.png" alt="">
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const backgrounds = [
                "{{ asset('assets/images/12.png') }}",
                "{{ asset('assets/images/2.jpg') }}",
                "{{ asset('assets/images/3.jpg') }}"
            ];

            let current = 0;

            setInterval(() => {
                current = (current + 1) % backgrounds.length;
                document.querySelector('.main-banner').style.setProperty('--dynamic-bg',
                    `url('${backgrounds[current]}')`);
            }, 5000); // change every 5 seconds
        });

        document.addEventListener("DOMContentLoaded", function() {
            const popup = new bootstrap.Modal(document.getElementById('welcomePopup'));
            popup.show();
        });
    </script>


@endsection
