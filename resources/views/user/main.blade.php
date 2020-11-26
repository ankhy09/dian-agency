
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dian Agency</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        dianagency@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +62 41.122.222
                    </div>
                </div>
                <div class="ht-right">
                @guest
                    <a href="/login" class="login-panel"><i class="fa fa-sign-in"></i>Login</a>
                    @if (Route::has('register'))
                                    <a class="login-panel" href="{{ route('register') }}" style="margin-right:5px;"><i class="fa fa-user-plus"></i> {{ __('Register') }}</a>
                                    @endif
                                    @else
                                    <a class="login-panel"><i class="fa fa-user"></i>{{ Auth::user()->nama }} <span class="caret"></span></a>
                                    <ul class="dropdown">
                                        <li> 
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                    </ul>
                                    @endguest
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>Rp.60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>Rp.120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">Rp. 150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Pemesanan Jasa Cetak</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/pesanspanduk') }}">Spanduk</a></li>
                                <li><a href="{{ url('/pesanxbanner') }}">X Banner</a></li>
                                <li><a href="{{ url('/pesanposter') }}">Poster</a></li>
                                <li><a href="{{ url('/pesanpin') }}">Pin</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/akunsaya') }}">Akun Saya</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <br>

    @yield('content')

        <br>
       <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-left">
                        <ul>
                            <li>Address: Jl. M.T. Harioni No. 68</li>
                            <li>Phone: +62 82.222.222</li>
                            <li>Email: dianagency@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                <div class="footer-right">
                             <div class="copyright-text">
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dian Agency Digital Printing
                                        </div>
                </div>
                                        
                </div>
            </div>
        </div>
       
    </footer>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="{{ asset('user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('user/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('user/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('user/js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('user/js/jquery.dd.min.js')}}"></script>
    <script src="{{ asset('user/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('user/js/main.js')}}"></script>
</body>

</html>