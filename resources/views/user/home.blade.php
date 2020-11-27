@extends ('user.main')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
            @foreach($datas as $item)
                <div class="col-md-3 mb-5">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="{{url('images/'.$item->gambar) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $item->nama_produk }}</strong></h5>
                            <a href="{{ url('/pesan', $item->id_produk)  }}" class="primary-btn">PESAN</a>
                        </div>
                    </div>
                </div>
               
                @endforeach

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    @endsection
    <!-- Banner Section End -->