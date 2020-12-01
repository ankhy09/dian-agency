@extends ('user.main')
@section('content')
<section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('home') }}" class="primary-btn"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $datas->nama_produk }}</li>
                    </ol>
                    </nav>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 mt-1">
                        <img src="{{url('images/'.$datas->gambar) }}" height="250px" width="250px">
                        <h3><strong>{{ $datas->nama_produk }}</strong></h3>
                        {{ $datas->deskripsi_produk }}
                </div>  

                <div class="col-lg-5 order-1 order-lg-2">   
                    <form method="post" action="{{ url('/pesan', $datas->id_produk)  }}">
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
                                    
                                        <select class="sorting">
                                            @foreach($ukurans as $item)
                                                <option value="{{$item->id_ukuran}}" selected>{{$item->ukuran}} cm</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <label for="jumlah">Jumlah Pesan</label>                                               
                                        <input class="form-control" name="jumlah" type="text" value="" required="" >
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                <label for="gambar">Upload File Desain<span>*</span></label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filecetak" enctype="multipart/form-data" required="">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                </div>
                            </div>
<!-- 
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                <label for="harga"><strong>Harga: Rp.{{ number_format($item->harga)}}</strong></label>
                                </div>
                            </div> -->

                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <button type="submit" class="primary-btn " ><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>  
                    </form>
                </div>
                 
            </div>   
        </div>
        
</section>

@endsection