@extends ('user.main')
@section('content')


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;Home</a>
                        <span>Tentang Kami</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Page Title Section Begin -->
    <div class="col-lg-12 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>Tentang Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Tentang Kami Section Begin -->
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-large-pic">
                            <img src="img/blog/blog-detail.jpg" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>
                                Dian Agency Digital Printing merupakan sebuah usaha perseorangan yang bergerak
                                di bidang jasa percetakan yang berlokasi di Kabupaten Buol, Sulawesi Tengah.
                                Produk yang dihasilkan dari Dian Agency Digital Printing adalah banner, pin, brosur, poster,
                                undangan pernikahan, majalah, buku, dan sebagainya.
                            </p>
                            <p>
                                Dian Agency Digital Printing yang terletak di Jalan M.T. Hariono No. 68 Kelurahan Buol Kecamatan
                                Biau Kabupaten Buol ini pun telah memiliki beberapa klien tetap yang memakai jasanya seperti beberapa
                                instansi pemerintahan dan juga beberapa kalangan masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Tentang Kami Section End -->


    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1882.5594867433545!2d121.43718082972065!3d1.1572339252580803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd74e7cb8660660b9!2sDian%20Agency!5e0!3m2!1sid!2sid!4v1604643001843!5m2!1sid!2sid"
                    height="610" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <h4>Contacts Us</h4>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Address:</span>
                                <p>Jl. M.T. Hariono No. 68 Kel. Buol Kec. Biau Kab. Buol</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Phone:</span>
                                <p>+62 852.4112.2222</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>dianagency@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- Partner Logo Section End -->