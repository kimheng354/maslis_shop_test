@extends('backend.layouts.master')
@section('title', 'Show Color')
@section('Content')
@component('components.createsuccess')
@endcomponent
<div class="container">
    <div class="row ">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Color</div>
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
                            @foreach($color as $color)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $color->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.color.edit',$color->color_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.color.destroy',$color->color_id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this color?')">Delete</button>
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