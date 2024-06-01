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
                            <h4 class="card-header text-primary">Fill With Card</h4>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="card_number">Card Number</label>
                                        <input type="text" class="form-control" id="card_number" name="card_number"
                                            placeholder="Enter card number">
                                    </div>
                                    <div class="form-group">
                                        <label for="expiry_date">Expiry Date</label>
                                        <input type="text" class="form-control" id="expiry_date" name="expiry_date"
                                            placeholder="MM/YYYY">
                                    </div>
                                    <div class="form-group">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="form-control" id="cvv" name="cvv"
                                            placeholder="CVV">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Check Out</button>
                                </form>
                            </div>
                        </div>
                   

                    <!-- Credit card form -->
                </div>
            </div>
        </div>
    </section>
@endsection
