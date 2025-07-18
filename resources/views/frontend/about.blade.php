@extends('frontend/layout/app')

@section('content')
    <div id="services" class="our-services section">
        <section class="breadcrumb-section text-center"
            style="background: url('{{ asset('assets/images/services-right-dec.png') }}') no-repeat center center; background-color:#242d5f;">
            <div class="container">
                <h2 class="mb-2">About</h2> {{-- Optional title --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/services') }}">About</a></li>

                    </ol>
                </nav>
            </div>
        </section>
        <div class="container">
            <div id="about" class="about-us section gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-image">
                                <img src="assets/images/about-left-image.png" alt="Two Girls working together">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <h2>Grow your business with our <em>Marketing Solutions</em> & <span>Customer
                                        Experience</span>
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
        </div>
    @endsection
