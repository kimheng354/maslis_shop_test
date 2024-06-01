@extends('backend.layouts.master')
@section('title', 'AdminProfile')
@section('Content')
    <section >
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('uploads/admin/avatar/' . $user->avatar) }}" alt="avatar"
                                 class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                            <h5 class="my-3">{{$user->name}}</h5>
                            <h6 class="text-primary">{{$user->user_role}}</h6>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->name}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->email}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->phone}}</p>
                                </div>
                            </div>
                            <hr>
                        <button class=" btn btn-primary">Edit</button>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
