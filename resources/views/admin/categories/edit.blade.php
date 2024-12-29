@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Edit Category</h1>
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" required>
                </div>
                <button type="submit" class="btn btn-success">Update Category</button>
            </form>
        </div>
    </div>
</div>
@endsection
