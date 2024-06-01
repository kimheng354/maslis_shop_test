@extends('backend.layouts.master')
@section('title', 'Edit Size')
@section('Content')
     <div class="container">
        <form action="{{ route('admin.size.update', $size->size_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Size Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $size->name }}" required>
            </div>
            <!-- Add other fields as needed -->
        
            <button type="submit" class="btn btn-primary">Update Size</button>
        </form>
     </div>
@endsection
