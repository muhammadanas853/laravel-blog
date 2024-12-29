@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Create Subcategory</h1>
        <form action="{{ route('admin.subcategories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Subcategory Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</div>
@endsection
