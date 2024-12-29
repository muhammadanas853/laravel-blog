@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="mb-4 text-center">Profile Details</h1>
        <div class="text-center mb-4">
            <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png' }}"
                 class="avatar img-thumbnail rounded-circle"
                 alt="avatar"
                 style="width: 150px; height: 150px; object-fit: cover;">
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Role:</strong> {{ $user->role == '1' ? 'Super Admin' : 'Admin' }}</p>
                <p><strong>Joined On:</strong> {{ $user->created_at->format('d M, Y') }}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('admin.profile.edit', ['profile' => $user->id]) }}" class="btn btn-primary btn-md">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
