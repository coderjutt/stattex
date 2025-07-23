@extends('dashboard.layout.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>All Subscribers</h4>
        <a href="{{ route('subscribers.export') }}" class="btn btn-success btn-sm float-end">Export to CSV</a>
    </div>
    <div class="card-body">
        @if($subscribers->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Subscribed At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subscribers as $index => $subscriber)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $subscriber->email }}</td>
                        <td>{{ $subscriber->website }}</td>
                        <td>{{ $subscriber->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No subscribers found.</p>
        @endif
    </div>
</div>
@endsection
