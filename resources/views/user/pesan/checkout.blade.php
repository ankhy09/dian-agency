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
                <h3><i class="fa fa-shopping-cart">Checkout</i></h3>
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
                                                             <button type="submit" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="ti-close"></i></button>
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
    </section>
    @endsection
    <!-- Shopping Cart Section End -->