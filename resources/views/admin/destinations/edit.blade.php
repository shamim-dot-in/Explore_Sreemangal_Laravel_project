@extends('layouts.app')

@section('title', 'Edit Destination')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">Edit Destination</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Destination Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $destination->title) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="5">{{ old('description', $destination->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    <img src="{{ asset('images/' . $destination->image) }}" width="120" alt="{{ $destination->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Change Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn custom-btn">Update Destination</button>
            </form>
        </div>
    </section>
</main>

@endsection