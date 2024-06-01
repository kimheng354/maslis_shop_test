@extends('backend.layouts.master')
@section('title', 'Edit Size')
@section('Content')
     <div class="container">
        <form action="{{ route('admin.branding.update', $branding->branding_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Branding Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $branding->name }}" required>
            </div>
            <!-- Add other fields as needed -->
        
            <button type="submit" class="btn btn-primary">Update Branding</button>
        </form>
     </div>
@endsection
