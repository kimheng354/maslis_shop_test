<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('frontend/img/icon/male-clothes.png') }}" type="image/x-icon">
    <title>Malis Shop . | @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
</head>

<body>
    {{-- Start  Modal Back Qr Code --}}
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Scan To Pay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  d-flex justify-content-center align-items-center p-4 ">
                    <img src="{{ asset('frontend/img/qr/abaqr.jpg') }}" alt="Modal Image" id="modalImage"
                        class="img-fluid" style="height: 500px; width: 400px">
                </div>
            </div>
        </div>
    </div>

    {{-- End  Modal Back Qr Code --}}
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="{{ route('signup.show') }}">Sign in</a>

            </div>
            <div class="offcanvas__top__hover">
                <span>Hotline <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li class="d-flex align-items-center">
                        <i class="text-dark fa fa-phone mr-2"></i>
                        <span class="text-dark font-weight-bold">087******</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-telegram text-dark mr-2"></i>
                        <a href="https://t.me/Lis_3Q" target="_blank" class="text-dark font-weight-bold">Telegram</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-facebook text-dark mr-2"></i>
                        <a href="https://web.facebook.com/seng.malis.353" target="_blank"
                            class="text-dark font-weight-bold ml-1">Facebook</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png') }}"
                    alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/icon/cart.png') }}" alt=""> <span>0</span></a>
            @auth
                @if (isset($user) && $user->avatar_url)
                    <a href="{{ route('customer.information') }}">
                        <img src="{{ $user->avatar_url }}" class="rounded-circle shadow-4" style="width: 30px;"
                            alt="Avatar" />
                    </a>
                @else
                    <a href="{{ route('customer.information') }}">
                        <img src="{{ asset('frontend/img/icon/customer/default_user.png') }}"
                            class="rounded-circle shadow-4" style="width: 30px;" alt="Default Avatar" />
                    </a>
                @endif
            @else
                <a href="{{ route('customer.information') }}">
                    <img src="{{ asset('frontend/img/icon/customer/user.png') }}" class="rounded-circle shadow-4"
                        style="width: 30px;" alt="Default Avatar" />
                </a>
            @endauth


        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                @guest
                                    <a href="{{ route('signup.show') }}">Sign Up</a>
                                @else
                                    <a href="{{route('signout')}}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" method="POST" action="{{route('signout')}}" style="display: none;">
                                      @csrf
                                    </form>
                                @endguest
                            </div>

                            <div class="header__top__hover align-content-center">
                                <span>Hotline<i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="text-dark fa fa-phone mr-2"></i>
                                        <span class="text-dark font-weight-bold">087997766</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fa fa-telegram text-dark mr-2"></i>
                                        <a href="https://t.me/Lis_3Q" target="_blank"
                                            class="text-dark font-weight-bold">Telegram</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fa fa-facebook text-dark mr-2"></i>
                                        <a href="https://web.facebook.com/seng.malis.353" target="_blank"
                                            class="text-dark font-weight-bold ml-1">Facebook</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{ route('home.show') }}"><img src="{{ asset('frontend/img/logo1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('home.show') }}">Home</a></li>
                            <li><a href="{{ route('shop.show') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('shoppingcart.show') }}">Shopping Cart</a></li>
                                    <li><a href="{{ route('checkout.show') }}">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('about.show') }}">About Us</a></li>
                            <li><a href="{{ route('contacts.show') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                @component('components.success_alert_home')
                @endcomponent
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img
                                src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/img/icon/cart.png') }}" alt="">
                            <span>0</span></a>

                        @auth
                            @if (isset($user) && $user->avatar_url)
                                <a href="{{ route('customer.information') }}">
                                    <img src="{{ $user->avatar_url }}" class="rounded-circle shadow-4"
                                        style="width: 30px;" alt="Avatar" />
                                </a>
                            @else
                                <a href="{{ route('customer.information') }}">
                                    <img src="{{ asset('frontend/img/icon/customer/default_user.png') }}"
                                        class="rounded-circle shadow-4" style="width: 30px;" alt="Default Avatar" />
                                </a>
                            @endif
                        @else
                            <a href="{{ route('customer.information') }}">
                                <img src="{{ asset('frontend/img/icon/customer/user.png') }}"
                                    class="rounded-circle shadow-4" style="width: 30px;" alt="Default Avatar" />
                            </a>
                        @endauth

                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
