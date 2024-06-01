@extends('frontend.layouts.master')
@section('title', 'Payment')
@section('Content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Payment Methods</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home.show') }}">Home</a>
                            <span>Payment Methods</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section style="background-color: #eee;">

        <div class="container py-4">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-body ">
                        <div class="card-header bg-dark text-white  ">
                            <strong>Payment Methods</strong></span>
                        </div>
                        <ul class="list-unstyled ml-2 py-2 ">
                            <li><a href="{{ route('paymentwithcard.show') }} " class="text-primary">Pay with Card</a></li>
                            <li><a href="{{ route('paymentwithqrkhmer.show') }}" class="text-primary">Qr Scan Bank
                                    Khmer</a></li>
                            <!-- Add more items as needed -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- Credit card form -->
                    <div class="card">
                        <h4 class="card-header text-primary">Scan To Pay</h4>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1" data-toggle="modal" data-target="#imageModal" data-src="{{ asset('frontend/img/payment/aba.png') }}">
                                    <img src="{{ asset('frontend/img/payment/aba.png') }}" alt="Image 1" class="img-fluid">
                                </div>
                                
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/acleda.png') }}" alt="Image 2" class="img-fluid">
                                </div>
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/canadia.png') }}" alt="Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1  ">
                                    <img src="{{ asset('frontend/img/payment/ppcbank.png') }}" alt="Image 1" class="img-fluid">
                                </div>  
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/Prince Bank.png') }}" alt="Image 2" class="img-fluid">
                                </div>
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/ucb.png') }}" alt="Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1  ">
                                    <img src="{{ asset('frontend/img/payment/emoney.png') }}" alt="Image 1" class="img-fluid">
                                </div>  
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/Sathapana Bank.png') }}" alt="Image 2" class="img-fluid">
                                </div>
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/maybank.png') }}" alt="Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1  ">
                                    <img src="{{ asset('frontend/img/payment/WingBank.png') }}" alt="Image 1" class="img-fluid">
                                </div>  
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/AEON BANK.png') }}" alt="Image 2" class="img-fluid">
                                </div>
                                <div class="col-lg-4 col-sm-12 border border-gray-800 p-1 ">
                                    <img src="{{ asset('frontend/img/payment/pipay.png') }}" alt="Image 3" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Credit card form -->
                </div>
                
            </div>
        </div>
    </section>
@endsection
