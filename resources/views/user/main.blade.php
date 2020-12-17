
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                        +62 852.4112.2222
                    </div>
                </div>
                <div class="ht-right">
                    @guest
                        <a href="{{ route('login') }}" class="login-panel"><i class="fa fa-sign-in"></i>Masuk</a>
                    @if (Route::has('register'))
                        <a class="login-panel" href="{{ route('register') }}" style="margin-right:5px;"><i class="fa fa-user-plus"></i> {{ __('Daftar') }}</a>
                    @endif
                    @else
                    <a class="login-panel" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                {{ __('Keluar') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="login-panel" style="margin-right:10px;"><i class="fa fa-user"></i>{{ Auth::user()->nama }} <span class="caret"></span></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/logo-da.png') }}" style="max-height: 200px"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 ">
                        <div class="logo">
                                <img src="{{ asset('images/logo-da2.png') }}" style="max-height: 100px" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 text-right ">
                        <ul class="nav-right">
                        <?php
                            $pesanan_utama = \App\Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status',0)->first();
                        if(!empty($pesanan_utama))
                        {
                            $notif = \App\PesananDetail::where('id_pesanan', $pesanan_utama->id_pesanan)->count(); 
                        }
                        ?>
                            <li class="cart-icon">
                                <a href="{{ url('/checkout') }}"><i class="icon_cart_alt fa-2x" ></i>
                                @if(!empty($notif))
                                <span>{{ $notif }}</span>
                                @endif
                                </a>
                            </li>
                            <li class="cart-price"></li>
                            @endguest
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
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">Pemesanan Jasa Cetak</a>
                            <ul class="dropdown">
                            <?php 
                             $datas =\App\Produk::orderBy('id_produk', 'DESC')->paginate(4); 
                            foreach ($datas as $item) {?>
                                <li>
                                <a href="{{ url('/pesan', $item['id_produk']) }}"><?php echo $item['nama_produk']; ?></a>
                                </li>    
                            <?php }  ?>
                                ?>                   
                            </ul>
                          
                        </li>
                        <li><a href="{{ url('/contact') }}">Tentang Kami</a></li>
                       @auth
                        <li><a href="{{ url('/riwayat') }}">Riwayat Pemesanan</a></li>
                        <li><a href="{{ url('/profile') }}">Profil Pelanggan</a></li>
                       @endauth
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

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset('images/logo-da.png') }}" style="max-height: 50px" alt=""></a>
                        </div>
                        <ul>
                            </strong><li><i class="fa fa-map-marker fa-lg"></i>&nbsp;&nbsp;<strong>Alamat :</strong></li>
                            <li>Jl. M.T. Haryono no. 68, Buol, Biau, Kabupaten Buol, Sulawesi Tengah 94565</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Informasi</h5>
                        <ul>
                            <li><a href="{{ url('/contact') }}">Tentang Kami</a></li>
                            <li><a href="{{ url('/carapesan') }}">Cara Pemesanan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Kontak dan Media Sosial</h5>
                    </div>
                    <div class="footer-left" >
                        <ul>
                            <li><i class="fa fa-mobile fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;Phone: +62 852.4112.2222</li>
                            <li><i class="fa fa-envelope fa-md"></i>&nbsp;&nbsp;Email: dianagency@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <center> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dian Agency Digital Printing <i class="fa fa-heart-o" aria-hidden="true"></i> <center>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<Script>
$('.dropdown-toggle').dropdown()
</Script>

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