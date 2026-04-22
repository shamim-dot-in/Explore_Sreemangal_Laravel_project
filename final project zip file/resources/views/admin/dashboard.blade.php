@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">Admin Dashboard</h2>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">Manage Bookings</h4>
                        <p>View and update all bookings.</p>
                        <a href="{{ route('admin.bookings.index') }}" class="btn custom-btn">
                            Open Bookings
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">Manage Tours</h4>
                        <p>Add, edit, and delete tours.</p>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ route('admin.tours.index') }}" class="btn custom-btn">
                                View Tours
                            </a>
                            <a href="{{ route('admin.tours.create') }}" class="btn btn-success">
                                Add Tour
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">Manage Hotels</h4>
                        <p>Add, edit, and delete hotels.</p>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ route('admin.hotels.index') }}" class="btn custom-btn">
                                View Hotels
                            </a>
                            <a href="{{ route('admin.hotels.create') }}" class="btn btn-success">
                                Add Hotel
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">Manage Destinations</h4>
                        <p>Add, edit, and delete destinations.</p>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ route('admin.destinations.index') }}" class="btn custom-btn">
                                View Destinations
                            </a>
                            <a href="{{ route('admin.destinations.create') }}" class="btn btn-success">
                                Add Destination
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12">
    <div class="p-4 border rounded bg-white shadow-sm mt-4">
        <h4 class="mb-3">📩 Latest Contact Messages</h4>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No messages found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('contacts.index') }}" class="btn btn-primary mt-2">
            View All Messages
        </a>
    </div>
</div>

            </div>
        </div>
    </section>
</main>

@endsection