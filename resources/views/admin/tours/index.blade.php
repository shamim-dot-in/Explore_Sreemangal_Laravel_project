@extends('layouts.app')

@section('title', 'Manage Tours')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Manage Tours</h2>
                <a href="{{ route('admin.tours.create') }}" class="btn custom-btn">Add New Tour</a>
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
                        @forelse($tours as $tour)
                            <tr>
                                <td>{{ $tour->id }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $tour->image) }}" width="100" alt="{{ $tour->title }}">
                                </td>
                                <td>{{ $tour->title }}</td>
                                <td>৳{{ $tour->price }}</td>
                                <td>
                                    <a href="{{ route('admin.tours.edit', $tour->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('admin.tours.destroy', $tour->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this tour?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No tours found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

@endsection