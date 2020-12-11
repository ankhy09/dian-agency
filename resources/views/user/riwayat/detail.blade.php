@extends ('user.main')
@section('content')
<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('riwayat') }}" class="primary-btn"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('riwayat') }}">Riwayat</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                        </ol>
                    </nav>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4>Sukses Check Out</h4>
                        <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong> dengan nominal : <strong>Rp. {{ number_format($pesanan->kode+$pesanan->total_harga) }}</strong></h5>
                    </div>
                </div>
                
                <div class="col-md-12 mt-2">
                <h3><i class="fa fa-info"></i>Detail Pemesanan</h3>
                @if(!empty($pesanan))
                <p align='right'>Tanggal Pesan: {{$pesanan->tanggal}}</p>
                </div>
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File</th>
                                    <th class="p-name">Nama Project</th>
                                    <th class="p-name">Pesan Cetak</th>
                                    <th>QTY</th>
                                    <th>Jumlah Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                            @foreach($pesanan_detail as $details)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td class="cart-pic first-row"><img src="{{url('/images/pesanan/' . $details->file)}}" style="max-height: 100px" alt=""></td>
                                    <td class="cart-title first-row">{{$details->nama_project}}</td>
                                    <td class="cart-title first-row">{{$details->ukuran->produk->nama_produk}}</td>
                                    <td class="p-price first-row">{{$details->qty}}</td>
                                    <td class="total-price first-row">Rp. {{number_format ($details->jumlah_harga)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total"><strong>Total Harga : <span>Rp. {{ number_format($pesanan->total_harga) }}</span></strong></li>
                                    <li class="cart-total"><strong>Kode Unik   : <span>Rp. {{ number_format($pesanan->kode) }}</span></strong></li>
                                    <li class="cart-total"><strong>Total yang harus ditransfer : <span>Rp. {{ number_format($pesanan->kode+$pesanan->total_harga) }}</span></strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- Shopping Cart Section End -->