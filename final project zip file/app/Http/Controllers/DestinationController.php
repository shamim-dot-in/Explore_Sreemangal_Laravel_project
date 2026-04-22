<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::latest()->get();
        return view('destinations', compact('destinations'));
    }

    public function adminIndex()
    {
        $destinations = Destination::latest()->get();
        return view('admin.destinations.index', compact('destinations'));
    }

    public function createAdmin()
    {
        return view('admin.destinations.create');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Destination::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.destinations.index')->with('success', 'Destination added successfully.');
    }

    public function editAdmin(Destination $destination)
    {
        return view('admin.destinations.edit', compact('destination'));
    }

    public function updateAdmin(Request $request, Destination $destination)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $destination->update($data);

        return redirect()->route('admin.destinations.index')->with('success', 'Destination updated successfully.');
    }

    public function destroyAdmin(Destination $destination)
    {
        $destination->delete();

        return redirect()->route('admin.destinations.index')->with('success', 'Destination deleted successfully.');
    }
}