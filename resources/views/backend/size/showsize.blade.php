@extends('backend.layouts.master')
@section('title', 'Show Size')
@section('Content')
@component('components.createsuccess')
@endcomponent
<div class="container">
    <div class="row ">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Size</div>
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
                            @foreach($sizes as $size)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $size->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.size.edit',$size->size_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.size.destroy',$size->size_id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this size?')">Delete</button>
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