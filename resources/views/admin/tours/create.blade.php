@extends('layouts.app')

@section('title', 'Add Tour')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">Add New Tour</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.tours.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tour Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tour Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn custom-btn">Save Tour</button>
            </form>
        </div>
    </section>
</main>

@endsection