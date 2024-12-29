@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="mb-4 text-center">Edit Profile</h1>
        <form action="{{ route('admin.profile.update', ['profile' => $user->id]) }}" method="POST" enctype="multipart/form-data" id="registrationForm">
            @csrf
            @method('PUT')
            <div class="text-center mb-4">
                <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png' }}"
                     id="avatarPreview"
                     class="avatar img-thumbnail rounded-circle"
                     alt="avatar"
                     style="width: 150px; height: 150px; object-fit: cover;">
                <h6 class="mt-2">Upload a different photo...</h6>
                <input type="file" class="form-control mt-2 file-upload" name="avatar" accept="image/*">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control" name="name" id="user_name" placeholder="User name" value="{{ old('user_name', $user->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="{{ old('phone', $user->phone) }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="{{ old('email', $user->email) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="location">Role</label>
                        <select name="role" class="form-control">
                            <option value="0">Admin</option>
                            <option value="1">Super Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm new password">
                    </div>
                </div>
            </div>
            <div class="form-group text-center mt-4">
                <button class="btn btn-success btn-md" type="submit">Save Profile</button>
                <button class="btn btn-secondary btn-md" type="reset">Reset Profile</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.querySelector('.file-upload');
        const avatarPreview = document.getElementById('avatarPreview');
        fileInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    avatarPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection
