<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact('contacts'));
    }
}