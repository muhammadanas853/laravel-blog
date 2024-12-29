@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Sub Category Details</h1>
            <p><strong>Name:</strong> {{ $subcategory->name }}</p>
            <p><strong>Category:</strong> {{ $subcategory->category->name }}</p>
            <a href="{{ route('admin.subcategories.edit', $subcategory->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.subcategories.destroy', $subcategory->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('admin.subcategories.index') }}" class="btn btn-primary mt-3">Back to Subcategories</a>
        </div>
    </div>
</div>
@endsection
