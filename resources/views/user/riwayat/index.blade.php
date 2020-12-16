@extends ('user.main')
@section('content')


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;Home</a>
                        <span><i class="fa fa-history"></i>&nbsp;Riwayat Pemesanan</span>
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
                            <h2><i class="fa fa-history"></i>&nbsp;Riwayat Pemesanan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Riwayat Pemesanan Section Begin -->
        <div class="container">
            <div class="row">
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
    <!-- Riwayat Pemesanan Section End -->

    @endsection