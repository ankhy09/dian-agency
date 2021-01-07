@extends ('user.main')
@section('content')



    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;Home</a>
                        <a href="{{ url('riwayat') }}"><i class="fa fa-history"></i>&nbsp;Riwayat Pemesanan</a>
                        <span><i class="fa fa-info"></i>&nbsp;Detail Pemesanan</span>
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
                            <h2><i class="fa fa-info"></i>&nbsp;Detail Pemesanan</h2>
                            <p>Tanggal Pesan <span>: {{$pesanan->tanggal}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    

    <!-- Detail Pemesanan Section Begin -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(!empty($pesanan))
                        <div class="cart-table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>File</th>
                                        <th class="p-name">Nama Project</th>
                                        <th>Pesan Cetak</th>
                                        <th>Ukuran</th>
                                        <th>Harga</th>
                                        <th>QTY</th>
                                        <th>Jumlah Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach($pesanan_detail as $details)
                                    <tr>
                                        <td class="cart-title">{{$no++}}</td>
                                        <td class="cart-pic first-row"><img src="{{url('/images/pesanan/' . $details->file)}}" style="max-height: 100px" alt=""></td>
                                        <td class="cart-title">{{$details->nama_project}}</td>
                                        <td class="qua-col">{{$details->ukuran->produk->nama_produk}}</td>
                                        <td class="cart-title">{{$details->ukuran->ukuran}}</td>
                                        <td class="qua-col">{{number_format ($details->ukuran->harga)}}</td>
                                        <td>{{$details->qty}}</td>
                                        <td class="qua-col">{{number_format ($details->jumlah_harga)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 offset-lg-">
                                <h4>Informasi Pembayaran</h4>
                                <hr>
                                <p>Untuk pembayaran silahkan ditransfer ke rekening dibawah ini: </p>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0">BANK BRI</h5>
                                        No. Rekening 1057-01-011013-50-5 atas nama <strong>Irwan Sy. Nggaibo</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 offset-lg-">
                                <div class="proceed-checkout">
                                    <ul>
                                        <li class="subtotal">Total Harga <span>Rp. {{ number_format($pesanan->total_harga) }}</span></li>
                                        <li class="subtotal">Kode Unik <span>Rp. {{ number_format($pesanan->kode) }}</span></li>
                                        <li class="cart-total">Total yang harus ditransfer : <span>Rp. {{ number_format($pesanan->kode+$pesanan->total_harga) }}</span></li>
                                    </ul>
                                </div>
                                <div style="padding-top:10px;">
                                    @if($details->pesanan->status == 1)
                                    <a href="{{ url('/konfirmasi-pembayaran/' . $details->id_pesanan) }}" class="primary-btn" style="width: 100%; text-align: center;"><i class="fa fa-credit-card"></i> Konfirmasi Pembayaran</a>
                                    @else
                                    <a href="#" class="primary-btn" style="width: 100%; text-align: center;"><i class="fa fa-credit-card"></i> Pembayaran Sedang Kami Proses</a>
                                    @endif
                                </div>     
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    <!-- Riwayat Pemesanan Section End -->

    <!-- Detail Riwayat Section Begin -->

        <!-- Detail Riwayat Section End -->
    @endsection