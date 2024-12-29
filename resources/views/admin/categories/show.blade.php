@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Category Details</h1>

            <div class="card">
                <div class="card-header">
                    <h3>{{ $category->name }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Category ID:</strong> {{ $category->id }}</p>
                    <p><strong>Created At:</strong> {{ $category->created_at->format('d M, Y') }}</p>
                    <p><strong>Updated At:</strong> {{ $category->updated_at->format('d M, Y') }}</p>
                </div>
            </div>

            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary mt-3">Back to Categories</a>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary mt-3">Edit Category</a>
            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-3">Delete Category</button>
            </form>
        </div>
    </div>
</div>
@endsection
