@extends('layouts.app')

@section('title', 'Manage Bookings')

@section('content')
<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">Manage Bookings</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Tour</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Travel Date</th>
                            <th>Persons</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Update Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $booking->user->name ?? 'N/A' }}</td>
                                <td>{{ $booking->tour->title ?? 'N/A' }}</td>
                                <td>{{ $booking->full_name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ $booking->travel_date }}</td>
                                <td>{{ $booking->persons }}</td>
                                <td>{{ $booking->message ?: 'N/A' }}</td>
                                <td>
                                    @if($booking->status === 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($booking->status === 'confirmed')
                                        <span class="badge bg-success">Confirmed</span>
                                    @else
                                        <span class="badge bg-danger">Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.bookings.status', $booking->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')

                                        <div class="d-flex gap-2 flex-wrap">
                                            <select name="status" class="form-select" style="min-width: 140px;">
                                                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>

                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this booking?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
@endsection