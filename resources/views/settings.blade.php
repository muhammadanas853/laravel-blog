@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Site Settings</h1>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row my-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="light_logo" class="form-label">Light Theme Logo</label>
                                <input type="file" class="form-control" name="light_logo" accept="image/*">
                                <small>Upload light theme logo image</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="dark_logo" class="form-label">Dark Theme Logo</label>
                                <input type="file" class="form-control" name="dark_logo" accept="image/*">
                                <small>Upload dark theme logo image</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body shadow">
                                    <h4>Site Settings</h4>
                                    <div class="mb-3">
                                        <label for="site_title" class="form-label">Website Title</label>
                                        <input type="text" class="form-control" name="site_title"
                                            value="{{ old('site_title', $settings['site_title'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="contact_email" class="form-label">Site Email</label>
                                        <input type="email" class="form-control" name="contact_email"
                                            value="{{ old('contact_email', $settings['contact_email'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="footer_text" class="form-label">Footer Text</label>
                                        <input type="text" class="form-control" name="footer_text"
                                            value="{{ old('footer_text', $settings['footer_text'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Site Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number"
                                            value="{{ old('phone_number', $settings['phone_number'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ old('address', $settings['address'] ?? '') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body shadow">
                                    <h4>Social Links</h4>
                                    <div class="mb-3">
                                        <label for="facebook_link" class="form-label">Facebook Link</label>
                                        <input type="url" class="form-control" name="facebook_link"
                                            value="{{ old('facebook_link', $settings['facebook_link'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="twitter_link" class="form-label">Twitter Link</label>
                                        <input type="url" class="form-control" name="twitter_link"
                                            value="{{ old('twitter_link', $settings['twitter_link'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="instagram_link" class="form-label">Instagram Link</label>
                                        <input type="url" class="form-control" name="instagram_link"
                                            value="{{ old('instagram_link', $settings['instagram_link'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="pinterest_link" class="form-label">Pinterest Link</label>
                                        <input type="url" class="form-control" name="pinterest_link"
                                            value="{{ old('pinterest_link', $settings['pinterest_link'] ?? '') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="youtube_link" class="form-label">Youtube Link</label>
                                        <input type="url" class="form-control" name="youtube_link"
                                            value="{{ old('youtube_link', $settings['youtube_link'] ?? '') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
@endsection
