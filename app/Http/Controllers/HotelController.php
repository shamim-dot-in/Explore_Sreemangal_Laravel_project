<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::latest()->get();
        return view('hotels', compact('hotels'));
    }

    public function adminIndex()
    {
        $hotels = Hotel::latest()->get();
        return view('admin.hotels.index', compact('hotels'));
    }

    public function createAdmin()
    {
        return view('admin.hotels.create');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Hotel::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel added successfully.');
    }

    public function editAdmin(Hotel $hotel)
    {
        return view('admin.hotels.edit', compact('hotel'));
    }

    public function updateAdmin(Request $request, Hotel $hotel)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $hotel->update($data);

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel updated successfully.');
    }

    public function destroyAdmin(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel deleted successfully.');
    }
}