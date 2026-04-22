<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create(Tour $tour)
    {
        return view('bookings.create', compact('tour'));
    }

    public function store(Request $request, Tour $tour)
    {
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:50',
            'travel_date' => 'required|date',
            'persons'     => 'required|integer|min:1',
            'message'     => 'nullable|string',
        ]);

        Booking::create([
            'user_id'     => Auth::id(),
            'tour_id'     => $tour->id,
            'full_name'   => $request->full_name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'travel_date' => $request->travel_date,
            'persons'     => $request->persons,
            'message'     => $request->message,
            'status'      => 'pending',
        ]);

        return redirect()->route('user.bookings')->with('success', 'Booking submitted successfully.');
    }

    public function userBookings()
    {
        $bookings = Booking::with('tour')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('bookings.index', compact('bookings'));
    }

    public function edit(Booking $booking)
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        if ($booking->status === 'confirmed') {
            return back()->with('error', 'Confirmed booking cannot be modified.');
        }

        $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:50',
            'travel_date' => 'required|date',
            'persons'     => 'required|integer|min:1',
            'message'     => 'nullable|string',
        ]);

        $booking->update([
            'full_name'   => $request->full_name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'travel_date' => $request->travel_date,
            'persons'     => $request->persons,
            'message'     => $request->message,
        ]);

        return redirect()->route('user.bookings')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        if ($booking->status === 'confirmed') {
            return back()->with('error', 'Confirmed booking cannot be cancelled.');
        }

        $booking->delete();

        return redirect()->route('user.bookings')->with('success', 'Booking cancelled successfully.');
    }

    public function adminIndex()
    {
        $bookings = Booking::with(['user', 'tour'])->latest()->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function adminUpdateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $booking->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Booking status updated successfully.');
    }

    public function adminEdit(Booking $booking)
{
    return view('admin.bookings.edit', compact('booking'));
}

public function adminUpdate(Request $request, Booking $booking)
{
    $request->validate([
        'full_name'   => 'required|string|max:255',
        'email'       => 'required|email|max:255',
        'phone'       => 'required|string|max:50',
        'travel_date' => 'required|date',
        'persons'     => 'required|integer|min:1',
        'message'     => 'nullable|string',
        'status'      => 'required|in:pending,confirmed,cancelled',
    ]);

    $booking->update([
        'full_name'   => $request->full_name,
        'email'       => $request->email,
        'phone'       => $request->phone,
        'travel_date' => $request->travel_date,
        'persons'     => $request->persons,
        'message'     => $request->message,
        'status'      => $request->status,
    ]);

    return redirect()->route('admin.bookings.index')->with('success', 'Booking updated successfully.');
}

    public function adminDestroy(Booking $booking)
{
    $booking->delete();

    return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully.');
}
}