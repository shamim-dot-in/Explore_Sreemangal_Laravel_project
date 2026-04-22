@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">User Dashboard</h2>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">My Bookings</h4>
                        <p>View all your tour bookings.</p>
                        <a href="{{ route('user.bookings') }}" class="btn custom-btn">
                            Go to My Bookings
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">Profile</h4>
                        <p>Manage your account information.</p>
                        <a href="{{ route('profile.edit') }}" class="btn custom-btn">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection