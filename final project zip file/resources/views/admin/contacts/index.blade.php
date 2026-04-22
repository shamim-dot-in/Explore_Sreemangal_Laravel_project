@extends('layouts.app')

@section('title', 'Contact Messages')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Contact Messages</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No messages found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection