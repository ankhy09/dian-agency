@extends ('user.main')
@section('content')


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;Home</a>
                        <span>Cara Pemesanan</span>
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
                            <h2>Cara Pemesanan Jasa Cetak</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Cara Pesan Section Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-latest-blog">
                    <img src="{{ asset('images/carapesan/langkah1.jpg') }}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                            <h4><font color="#e7ab3c"><strong>Langkah 1</strong></font></h4>
                            </div>
                        </div>
                            <h4>Pilih Produk</h4>
                        <p>Pilih produk yang ingin Anda Cetak.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="single-latest-blog">
                    <img src="{{ asset('images/carapesan/langkah2.jpg') }}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                            <h4><font color="#e7ab3c"><strong>Langkah 2</strong></font></h4>
                            </div>
                        </div>
                            <h4>Masukkan Spesifikasi</h4>
                        <p>Tulisakan nama project, ukuran, dan jumlah yang anda inginkan, serta upload file yang ingin anda cetak, kemudian klik <strong>"Add to Chart".</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="single-latest-blog">
                    <img src="{{ asset('images/carapesan/langkah3.jpg') }}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                            <h4><font color="#e7ab3c"><strong>Langkah 3</strong></font></h4>
                            </div>
                        </div>
                            <h4>Chackout Pesanan</h4>
                        <p>Setelah Anda klik Add To Cart, maka akan tampil halaman Shopping Cart. Di halaman shopping Cart, Anda dapat melihat jumlah pesanan Anda, jika Anda ingin pesan lagi, Anda dapat klik menu button Home, dan Klik <strong>"Checkout"</strong> untuk melanjutkan chackout pesanan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="single-latest-blog">
                    <img src="{{ asset('images/carapesan/langkah4.jpg') }}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                            <h4><font color="#e7ab3c"><strong>Langkah 4</strong></font></h4>
                            </div>
                        </div>
                            <h4>Melakukan Pembayaran</h4>
                        <p>Setelah Anda melakukan checkout, maka akan tampil halaman <strong>Detail Pemesanan</strong>. Untuk Pembayaran dapat anda lakukan melalui transfer via Bank ke rekening yang tertera pada halaman Detail Pemesanan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="single-latest-blog">
                    <img src="{{ asset('images/carapesan/langkah4.jpg') }}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                            <h4><font color="#e7ab3c"><strong>Langkah 5</strong></font></h4>
                            </div>
                        </div>
                            <h4>Melakukan Konfirmasi Pembayaran</h4>
                        <p>Untuk Konfirmasi Pembayaran dapat dilakukan melalui via WhatsApp dengan mengirim foto bukti pembayaran. jika telah melakukan konfirmasi pembayaran, maka anda akan menerima nota elektronik berupa email yang nantinya akan digunakan untuk mengambil pesanan anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cara Pesan Section Begin -->

    @endsection