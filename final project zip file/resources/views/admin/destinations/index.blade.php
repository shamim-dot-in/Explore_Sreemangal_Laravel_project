@extends('layouts.app')

@section('title', 'Manage Destinations')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Manage Destinations</h2>
                <a href="{{ route('admin.destinations.create') }}" class="btn custom-btn">Add New Destination</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($destinations as $destination)
                            <tr>
                                <td>{{ $destination->id }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $destination->image) }}" width="100" alt="{{ $destination->title }}">
                                </td>
                                <td>{{ $destination->title }}</td>
                                <td>
                                    <a href="{{ route('admin.destinations.edit', $destination->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('admin.destinations.destroy', $destination->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this destination?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No destinations found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

@endsection