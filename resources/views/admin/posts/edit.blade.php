@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Edit Post</h1>
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Post Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4" required>{{ old('description', $post->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_tags" class="form-label">Meta Tags</label>
                    <input type="text" class="form-control" name="meta_tags" id="meta_tags" value="{{ old('meta_tags', $post->meta_tags) }}">
                </div>
                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea class="form-control" name="meta_description" id="meta_description" rows="3">{{ old('meta_description', $post->meta_description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="category_id" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="subcategory_id" class="form-label">Subcategory</label>
                    <select class="form-select" name="subcategory_id" id="subcategory_id">
                        <option value="">Select Subcategory</option>
                        @foreach ($subcategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Update Post</button>
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
            $('#description').summernote({
                placeholder: 'Write the description here...',
                tabsize: 2,
                height: 200
            });

            $('.dropdown-toggle').dropdown();
        });
    </script>
@endsection
