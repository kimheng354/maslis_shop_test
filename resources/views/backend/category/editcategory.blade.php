@extends('backend.layouts.master')
@section('title', 'Edit Category')
@section('Content')
     <div class="container">
        <form action="{{ route('admin.category.update', $category->category_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <!-- Add other fields as needed -->
        
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
     </div>
@endsection
