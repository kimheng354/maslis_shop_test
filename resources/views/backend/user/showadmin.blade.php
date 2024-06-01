@extends('backend.layouts.master')
@section('title', 'Admin Information')
@section('Content')
    <div class="container">

        <div class="table-responsive">
            <table class="table table-striped">
                @component('components.alert')
                @endcomponent
                <thead class="bg-primary">
                    <tr class="text-white">
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Gmail</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <img src="{{ asset('uploads/admin/avatar/' . $user->avatar) }}" width="100px" alt="">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->user_role }}</td>

                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.create.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin.users.destroy', ['id' => $user->id]) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this user?')"
                                            class="btn btn-danger">Delete</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
