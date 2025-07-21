@extends('dashboard.layout.app')

@section('content')
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h3>SubServices</h3>
                </div>
                <div class="col-6">
                    <a class="btn btn-success" href="{{ route('admin_subservices_create') }}">Create</a>
                </div>
            </div>
            <hr>
            <div class="table-responsive">

                <table id="example" class="table table-striped table-bordered" style="width:100%">

                    <thead>

                        <tr>

                            <th>Name</th>
                            <th>Service</th>
                            <th>icon</th>
                            <th>Description</th>
                            <th>action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach ($subServices as $service)
                            <tr>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->service->name }}</td>

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
                                    <a href="{{ route('admin_subservices_edit', $service->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin_subservices_destroy', $service->id) }}" method="POST"
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
