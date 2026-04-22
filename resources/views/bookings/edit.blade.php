@extends('layouts.app')

@section('title', 'Edit Booking')

@section('content')
<main>
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="p-4 border rounded shadow-sm bg-white">
                        <h2 class="mb-4">Edit Booking</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-4">
                            <h4>{{ $booking->tour->title ?? 'Tour' }}</h4>
                            <p><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
                        </div>

                        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" name="full_name" id="full_name" class="form-control"
                                    value="{{ old('full_name', $booking->full_name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email', $booking->email) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ old('phone', $booking->phone) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="travel_date" class="form-label">Travel Date</label>
                                <input type="date" name="travel_date" id="travel_date" class="form-control"
                                    value="{{ old('travel_date', $booking->travel_date) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="persons" class="form-label">Persons</label>
                                <input type="number" name="persons" id="persons" class="form-control" min="1"
                                    value="{{ old('persons', $booking->persons) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" id="message" rows="4" class="form-control">{{ old('message', $booking->message) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Update Booking
                            </button>

                            <a href="{{ route('user.bookings') }}" class="btn btn-secondary">
                                Back
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection