@extends('dashboard.layout.app')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Update Sub-Service</h5>

         <form class="row g-3" method="POST"
                action="{{ isset($subservice) ? route('admin_subservices_update', $subservice->id) : route('subservices.store') }}"
                enctype="multipart/form-data">
                @csrf

                @if (isset($subservice))
                    @method('PUT')
                @endif

                <div class="col-md-6">
                <label for="service_id" class="form-label">Select Main Service</label>
                <select class="form-select" name="service_id" id="service_id" required>
                    <option value="" disabled {{ empty(old('service_id', $subservice->service_id ?? null)) ? 'selected' : '' }}>
                        Select Service
                    </option>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}"
                            {{ old('service_id', $subservice->service_id ?? null) == $service->id ? 'selected' : '' }}>
                            {{ $service->name }}
                        </option>
                    @endforeach
                </select>
            </div>


                <div class="col-md-6">
                    <label for="name" class="form-label">Sub-Service Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $subservice->name ?? '') }}" required>
                </div>

              <div class="col-md-6">
                <label for="icon" class="form-label">Upload Icon</label>
                <input id="icon" type="file" class="form-control" name="icon" accept=".jpg, .jpeg, .png, .svg, .webp">

                @if(isset($subservice) && $subservice->icon)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $subservice->icon) }}" width="60" height="60" alt="Current Icon">
                    </div>
                @endif
            </div>


              <div class="col-md-6">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">
                    {{ old('description', isset($subservice) ? $subservice->description : '') }}
                </textarea>
            </div>


                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Update</button>
                        <a href="{{ route('admin_subservices') }}" class="btn btn-secondary px-4">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
