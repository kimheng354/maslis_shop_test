@extends('backend.layouts.master')
@section('title', 'Edit Admin')
@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Admin</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.create.update',$users->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="text-primary">Admin Name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ $users->name }}" placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-primary">Admin Gmail:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ $users->email }}" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone" class="text-primary">Admin Phone:</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ $users->phone }}" placeholder="Phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="user_role" class="text-primary">Admin Role:</label>
                                <select name="user_role" class="form-control @error('user_role') is-invalid @enderror"
                                    id="user_role">
                                    <option value="" disabled selected>---Select Role---</option>
                                    <option value="{{ $users->user_role }}" selected>admin</option>
                                </select>
                                @error('user_role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="avatar" class="text-primary">Admin Avatar:</label>
                                <input type="file" name="avatar"
                                    class="form-control @error('avatar') is-invalid @enderror">
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="from-group mt-2">
                                    <img src="{{ asset('uploads/admin/avatar/' . $users->avatar) }}" width="100px" alt="">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Update Admin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
