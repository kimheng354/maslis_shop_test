@extends('backend.layouts.master')
@section('title', 'Show Category')
@section('Content')
@component('components.createsuccess')
@endcomponent
<div class="container">
    <div class="row ">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', $category->category_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.category.destroy', $category->category_id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                        </form>
                                    </td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection