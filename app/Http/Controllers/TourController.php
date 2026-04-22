<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::latest()->get();
        return view('tours', compact('tours'));
    }

    public function adminIndex()
    {
        $tours = Tour::latest()->get();
        return view('admin.tours.index', compact('tours'));
    }

    public function createAdmin()
    {
        return view('admin.tours.create');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Tour::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.tours.index')->with('success', 'Tour added successfully.');
    }

    public function editAdmin(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }

    public function updateAdmin(Request $request, Tour $tour)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
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

        $tour->update($data);

        return redirect()->route('admin.tours.index')->with('success', 'Tour updated successfully.');
    }

    public function destroyAdmin(Tour $tour)
    {
        $tour->delete();

        return redirect()->route('admin.tours.index')->with('success', 'Tour deleted successfully.');
    }
}