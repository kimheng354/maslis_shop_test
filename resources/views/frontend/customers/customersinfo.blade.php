@extends('frontend.layouts.master')
@Section('title', 'UserInformation')
@section('Content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>User Information</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home.show') }}">Home</a>
                            <span>User Information</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section style="background-color: #eee;">
        <div class="container p-4">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class=" card-body ">
                            <div class="card-header  ">
                                <span>Hello , <strong>{{$user->name}}</strong></span>
                            </div>
                            <h5 class="mt-3 text-primary ml-3 card-title">Manage My Account</h5>
                            <ul class="list-unstyled ml-4 py-1 ">
                                <li><a href="{{ route('customer.information') }}">My Profile</a></li>
                                <li><a href="{{ route('customer.customerorderdetail') }}">My Orders</a></li>
                                <li><a href="#">Billing</a></li>
                                <!-- Add more items as needed -->
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <h4 class="card-header text-primary">My Profile</h4>
                        <div class="card-body">

                            <hr>
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
                            {{-- <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary rounded-pill w-25">Edit</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
