@extends ('user.main')
@section('content')
<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('/') }}" class="primary-btn"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-12 mt-2">
                <h3><i class="fa fa-history">Riwayat Pemesanan</i></h3>
                </div>
                <div class="col-lg-12">
                    <div class="cart-table">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Detail Pemesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                            @foreach($pesanans as $pesanan)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$pesanan->tanggal}}</td>
                                    <td>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode) }}</td>
                                    <td>
                                        @if($pesanan->status == 1)
                                            Sudah Pesan & Belum dibayar
                                        @else
                                            Sudah dibayar 
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/riwayat' . '/' . $pesanan->id_pesanan) }}" class="primary-btn"><i class="fa fa-info"></i> Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- Shopping Cart Section End -->