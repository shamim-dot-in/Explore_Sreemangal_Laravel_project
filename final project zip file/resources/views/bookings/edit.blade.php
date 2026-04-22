@extends('layouts.app')

@section('title', 'Edit Booking')

@section('content')

<main>
    <section class="contact-section section-padding">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="custom-form">
                        @csrf
                        @method('PUT')

                        <h2 class="mb-4">Edit Booking</h2>

                        <input type="text" name="full_name" class="form-control mb-2"
                               value="{{ $booking->full_name }}" placeholder="Full Name">

                        <input type="email" name="email" class="form-control mb-2"
                               value="{{ $booking->email }}" placeholder="Email">

                        <input type="text" name="phone" class="form-control mb-2"
                               value="{{ $booking->phone }}" placeholder="Phone">

                        <input type="date" name="travel_date" class="form-control mb-2"
                               value="{{ $booking->travel_date }}">

                        <input type="number" name="persons" class="form-control mb-2"
                               value="{{ $booking->persons }}">

                        <textarea name="message" class="form-control mb-2"
                                  placeholder="Message">{{ $booking->message }}</textarea>

                        <button class="btn btn-success">Update Booking</button>

                    </form>

                </div>

            </div>
        </div>
    </section>
</main>

@endsection