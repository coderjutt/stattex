@extends('frontend/layout/app')

@section('content')
    <div id="services" class="our-services section">
        <section class="breadcrumb-section text-center"
            style="background: url('{{ asset('assets/images/services-right-dec.png') }}') no-repeat center center; background-color:#242d5f;">
            <div class="container">
                <h2 class="mb-2">Services</h2> {{-- Optional title --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>

                    </ol>
                </nav>
            </div>
        </section>


        <div class="services-right-dec">
            <img src="{{ asset('assets/images/services-right-dec.png') }}" alt="">
        </div>
        <div class="container gap">
            <div class="services-left-dec">
                <img src="{{ asset('assets/images/services-left-dec.png') }}" alt="">
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
@endsection
