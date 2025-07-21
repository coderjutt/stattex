@extends('dashboard.layout.app')

@section('content')
    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body p-4">

            <h5 class="mb-4">Update Product</h5>

            <form class="row g-3" method="POST"
                action="{{ isset($product) ? route('admin_product_update', $product->id) : route('admin_product_update') }}"
                enctype="multipart/form-data">
                @csrf

                @if (isset($product))
                    @method('PUT')
                @endif

                <div class="col-md-6">
                    <label for="input1" class="form-label">product Name</label>
                    <input type="text" class="form-control" name="name" id="input1"
                        placeholder="Enter product name" value="{{ old('name', $product->name ?? 'null') }}">
                </div>

                <div class="col-md-6">
                    <label for="icon" class="form-label">Upload Icon</label>
                    <input id="image" type="file" class="form-control" name="image"
                        accept=".jpg, .png, .jpeg, .svg, .webp">

                    @if (isset($product) && $product->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $product->image) }}" width="60" height="60"
                                alt="Current Icon">
                        </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="input11" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="input11" placeholder="Description ..." rows="3">{{ old('description', $product->description ?? 'null') }}</textarea>
                </div>

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">
                            {{ isset($product) ? 'Update' : 'Submit' }}
                        </button>
                        {{-- <button type="reset" class="btn btn-grd-royal px-4">Reset</button> --}}
                    </div>
                </div>

            </form>


        </div>

    </div>
@endsection
