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
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>Tour</th>
                            <th>Date</th>
                            <th>Persons</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($bookings as $booking)
                            <tr>
                                <td>{{ $booking->tour->title ?? 'N/A' }}</td>
                                <td>{{ $booking->travel_date }}</td>
                                <td>{{ $booking->persons }}</td>
                                <td>{{ ucfirst($booking->status) }}</td>

                                <td>
                                    @if($booking->status !== 'confirmed')
                                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-warning">
                                            Edit
                                        </a>

                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Cancel booking?')">
                                                Cancel
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-success">Locked</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    No bookings found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </section>
</main>

@endsection