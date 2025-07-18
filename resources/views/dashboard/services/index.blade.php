@extends('dashboard.layout.app')

@section('content')
    <div class="card">

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row">
                <div class="col-6">
                    <h2>Services</h2>
                </div>
                <div class="col-6">
                    <a class="btn btn-success" href="{{ route('admin_services_create') }}">Create</a>
                </div>


            </div>
            <div class="table-responsive">

                <table id="example" class="table table-striped table-bordered" style="width:100%">

                    <thead>

                        <tr>

                            <th>Name</th>
                            <th>icon</th>
                            <th>Description</th>
                            <th>action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->name }}</td>
                                <td>
                                    @if ($service->icon)
                                        <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" width="40"
                                            height="40">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ \Illuminate\Support\Str::limit($service->description, 100, '...') }}</td>
                                <td>
                                    <a href="{{ route('admin_services_edit', $service->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin_services_destroy', $service->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')"
                                            class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>

            </div>

        </div>

    </div>
@endsection
