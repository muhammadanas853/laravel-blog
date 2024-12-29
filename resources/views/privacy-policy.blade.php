@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Privacy Policy</h1>

            {{-- Success Message --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Privacy Policy Form --}}
            <form action="{{ route('privacy.policy.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="privacyDescription" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="privacyDescription" cols="30" rows="10">{{ old('description', $policy->description) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save Privacy Policy</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <!-- Load jQuery first, as it is a dependency for Bootstrap and Summernote -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>

    <!-- Load Bootstrap with defer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Load Summernote with defer -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js" defer></script>

    <!-- Load Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('#privacyDescription').summernote({
                placeholder: 'Write the description here...',
                tabsize: 2,
                height: 200
            });

            $('.dropdown-toggle').dropdown();
        });
    </script>
@endsection
