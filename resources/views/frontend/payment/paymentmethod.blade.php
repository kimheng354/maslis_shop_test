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
                        <a href="{{route('home.show')}}">Home</a>
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
            <div class="col-lg-4">
                <div class="card card-body ">
                    <div class="card-header bg-dark text-white  ">
                      <strong>Payment Methods</strong></span>
                    </div>
                    <ul class="list-unstyled ml-2 py-2 ">
                        <li><a href="{{ route('paymentwithcard.show') }} " class="text-primary">Pay with Card</a></li>
                        <li><a href="{{ route('paymentwithqrkhmer.show') }}" class="text-primary">Qr Scan Bank Khmer</a></li>
                        <!-- Add more items as needed -->
                    </ul>
                </div>
            </div>

            {{-- <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Scan To Pay</h4>
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead class="bg-danger text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Placed On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="https://via.placeholder.com/50" alt="Product Image"></td>
                                        <td>Product A</td>
                                        <td>2</td>
                                        <td>12$</td>
                                        <td>Received</td>
                                        <td>22/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="https://via.placeholder.com/50" alt="Product Image"></td>
                                        <td>Product A</td>
                                        <td>2</td>
                                        <td>12$</td>
                                        <td>Received</td>
                                        <td>22/05/2023</td>
                                    </tr>
                                    <!-- Add more table rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
