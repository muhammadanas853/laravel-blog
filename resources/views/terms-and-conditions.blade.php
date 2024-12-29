@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Terms and Conditions</h1>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('terms.and.conditions.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control" name="description" id="termsDescription" cols="30" rows="10">{{ old('description', $terms->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Terms and Conditions</button>
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
            $('#termsDescription').summernote({
                placeholder: 'Write the description here...',
                tabsize: 2,
                height: 200
            });

            $('.dropdown-toggle').dropdown();
        });
    </script>
@endsection

