@extends('dashboard.layout.app')

@section('content')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add New Sub-Service</h5>

            <form class="row g-3" method="POST" action="{{ route('subservices.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-6">
                    <label for="service_id" class="form-label">Select Main Service</label>
                    <select class="form-select" name="service_id" id="service_id" required>
                        <option value="" disabled selected>Select Service</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="name" class="form-label">Sub-Service Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter sub-service name" required>
                </div>

                <div class="col-md-6">
                    <label for="icon" class="form-label">Upload Icon</label>
                    <input id="icon" type="file" class="form-control" name="icon" accept=".jpg, .jpeg, .png, .svg, .webp">
                </div>

                <div class="col-md-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description..."></textarea>
                </div>

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        {{-- <button type="reset" class="btn btn-grd-royal px-4">Reset</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
