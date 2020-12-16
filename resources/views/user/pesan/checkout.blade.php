@extends ('user.main')
@section('content')




    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;Home</a>
                        <span>Shopping Cart</span>
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
                            <h2><i class="fa fa-shopping-cart"></i>&nbsp;Shopping Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

<!-- Shopping Cart Section Begin -->
        <div class="container">
            <div class="row">
                @if(!empty($pesanan))   
                <div class="col-lg-12">
                    <div class="cart-table">
                        <p style="text-align:right">Tanggal Pesan <span>: {{$pesanan->tanggal}}</span></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File</th>
                                    <th class="p-name">Nama Project</th>
                                    <th class="p-name">Pesan Cetak</th>
                                    <th>QTY</th>
                                    <th>Jumlah Harga</th>
                                    <th>Aksi</th>
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
                                    <td class="total-price first-row">{{number_format ($details->jumlah_harga)}}</td>
                                    <td class="close-td first-row">
                                    <form method="POST" action="{{ url('/checkout' . '/' . $details->id_pesanandetail) }}" accept-charset="UTF-8" style="display:inline">
                                                             {{ method_field('DELETE') }}
                                                             {{ csrf_field() }}
                                                             <button type="submit" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)" style="border:none;"><span><i class="ti-close"></i></span></button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total"><strong>Total Harga <span>Rp. {{number_format($pesanan->total_harga)}}</span></strong></li>
                                </ul>
                                <a href="{{ url('konfirmasi-check-out') }}" class="proceed-btn">CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    @endsection
    <!-- Shopping Cart Section End -->