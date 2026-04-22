@extends('layouts.app')

@section('title', 'Edit Hotel')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">Edit Hotel</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.hotels.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Hotel Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $hotel->title) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="5">{{ old('description', $hotel->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price', $hotel->price) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    <img src="{{ asset('images/' . $hotel->image) }}" width="120" alt="{{ $hotel->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Change Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn custom-btn">Update Hotel</button>
            </form>
        </div>
    </section>
</main>

@endsection