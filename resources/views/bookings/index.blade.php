@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')
<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">My Bookings</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table align-middle text-center">
                    <thead>
                        <tr>
                            <th class="text-start">Tour</th>
                            <th>Travel Date</th>
                            <th>Persons</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                            <tr>
                                <td class="text-start">
                                    {{ $booking->tour->title ?? 'N/A' }}
                                </td>
                                <td>{{ $booking->travel_date }}</td>
                                <td>{{ $booking->persons }}</td>
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
                                    @if($booking->status !== 'confirmed')
                                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to cancel this booking?')">
                                                Cancel
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-success">Confirmed</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
@endsection