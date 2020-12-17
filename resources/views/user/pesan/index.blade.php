@extends ('user.main')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        <span>{{ $datas->nama_produk }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <section class="contact-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 order-1 order-lg-2">
                    <div class="col-lg-12 mt-2"><img src="{{url('/images/produk/'.$datas->gambar) }}" height="256px" width="365"></div>
                            <div class="col-lg-12 mt-4"><h3><strong>{{ $datas->nama_produk }}</strong></h3>
                            {{ $datas->deskripsi_produk }}
                            </div>
                    </div>  
                    <div class="col-lg-5 order-1 order-lg-2 mt-4">   
                        <form enctype="multipart/form-data" method="post" action="{{ url('/pesan', $datas->id_produk)  }}" >
                            @csrf               
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <label for="nama_procject">Nama Project</label>                                               
                                         <input class="form-control" name="nama" type="text" id="nama_project" value="" required="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-5 col-md-12">
                                        <label for="fir">Ukuran</label>
                                        <div class="select-option">
                                            <select name="ukuran" class="sorting">
                                                @foreach($ukurans as $item)
                                                    <option value="{{$item->id_ukuran}}" selected>{{$item->ukuran}} cm</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <label for="jumlah">Jumlah Pesan</label>                                               
                                            <input class="form-control" name="jumlah" type="text" value="" required="" >
                                            @if ($errors->has('jumlah'))
                                            <div class="alert alert-danger">isi angka</div>
                                            @endif
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                    <label for="gambar">Upload File Desain<span>*minimal 2 Megabyte</span></label>
                                            <div class="custom-file mb-3">
                                                <input type="file" name="filecetak" required="">
                                                @if ($errors->has('filecetak'))
                                            <div class="alert alert-danger">format file jpeg,png,jpg,gif,svg min:5120 dan max:10240</div>
                                            @endif
                                            </div>
                                            
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <button type="submit" class="primary-btn " style="border:none;"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    </div>
                                </div>  
                        </form>
                    </div>
                </div>   
            </div>
            
    </section>

@endsection