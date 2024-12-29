@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Post Details</h1>
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="card-body">
                    <p><strong>Description:</strong> {{ $post->description }}</p>
                    <p><strong>Meta Tags:</strong> {{ $post->meta_tags }}</p>
                    <p><strong>Meta Description:</strong> {{ $post->meta_description }}</p>
                    <p><strong>Category:</strong> {{ $post->category->name }}</p>
                    @if($post->subcategory)
                        <p><strong>Subcategory:</strong> {{ $post->subcategory->name }}</p>
                    @else
                        <p><strong>Subcategory:</strong> Not assigned</p>
                    @endif
                    @if($post->image)
                        <p><strong>Image:</strong></p>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                    @else
                        <p><strong>Image:</strong> No image available</p>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to Posts</a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
