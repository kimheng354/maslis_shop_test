@extends('backend.layouts.master')
@section('title', 'Edit Color')
@section('Content')
     <div class="container">
        <form action="{{ route('admin.color.update', $color->color_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Color Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $color->name }}" required>
            </div>
            <!-- Add other fields as needed -->
        
            <button type="submit" class="btn btn-primary">Update Color</button>
        </form>
     </div>
@endsection
