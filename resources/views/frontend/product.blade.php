@extends('frontend\layout\app')
@section('content')
<div id="services" class="our-services section">
        <section class="breadcrumb-section text-center"
            style="background: url('{{ asset('assets/images/services-right-dec.png') }}') no-repeat center center; background-color:#242d5f;">
            <div class="container">
                <h2 class="mb-2">Our Products</h2> {{-- Optional title --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/services') }}">Products</a></li>

                    </ol>
                </nav>
            </div>
        </section>
   <div id="portfolio" class="our-portfolio section gap">
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

@endsection