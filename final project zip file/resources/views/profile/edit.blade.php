@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')

<main>
    <section class="section-padding">
        <div class="container">
            <h2 class="mb-4">Edit Profile</h2>

            @if (session('status') === 'profile-updated')
                <div class="alert alert-success">
                    Profile updated successfully.
                </div>
            @endif

            @if (session('status') === 'password-updated')
                <div class="alert alert-success">
                    Password updated successfully.
                </div>
            @endif

            @if (session('status') === 'verification-link-sent')
                <div class="alert alert-success">
                    A new verification link has been sent to your email address.
                </div>
            @endif

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">Profile Information</h4>

                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn custom-btn">Save Profile</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3">Update Password</h4>

                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input name="current_password" type="password" class="form-control">
                                @error('current_password', 'updatePassword')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input name="password" type="password" class="form-control">
                                @error('password', 'updatePassword')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control">
                                @error('password_confirmation', 'updatePassword')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn custom-btn">Update Password</button>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="mb-3 text-danger">Delete Account</h4>
                        <p class="mb-3">Once your account is deleted, all of its resources and data will be permanently deleted.</p>

                        <form method="post" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account?');">
                            @csrf
                            @method('delete')

                            <div class="mb-3" style="max-width: 400px;">
                                <label class="form-label">Confirm Password</label>
                                <input name="password" type="password" class="form-control">
                                @error('password', 'userDeletion')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-danger">Delete Account</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection