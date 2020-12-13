@extends ('user.main')
@section('content')

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
            @foreach($datas as $item)
                <div class="col-lg-3 mt-4">
                    <div class="single-banner">
                        <img src="{{url('/images/produk/' . $item->gambar)}}" alt="">
                    </div>
                    <div class="col-lg-12 mt-3">
                            <center><h5 class="card-title"><strong>{{ $item->nama_produk }}</strong></h5></center>
                            <center><a href="{{ url('/pesan', $item->id_produk)  }}" class="primary-btn">PESAN</a></center>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    @endsection
    <!-- Banner Section End -->