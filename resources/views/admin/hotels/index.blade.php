@extends('layouts.app')

@section('title', 'Manage Hotels')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Manage Hotels</h2>
                <a href="{{ route('admin.hotels.create') }}" class="btn custom-btn">Add New Hotel</a>
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
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($hotels as $hotel)
                            <tr>
                                <td>{{ $hotel->id }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $hotel->image) }}" width="100" alt="{{ $hotel->title }}">
                                </td>
                                <td>{{ $hotel->title }}</td>
                                <td>{{ $hotel->price ? '৳' . $hotel->price : 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('admin.hotels.edit', $hotel->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this hotel?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No hotels found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

@endsection