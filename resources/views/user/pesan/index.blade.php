@extends ('user.main')
@section('content')
<section class="contact-section spad">
        <div class="container">
            <div class="row">
            <div class="col-lg-5 order-1 order-lg-2">
                    <img src="user/img/spanduk.jpg" height="250px" width="250px">
                    <h3><strong>$datas->nama_produk</strong></h3>
                    {{ $desc->deskripsi_produk }}
            </div>

                <div class="col-lg-5 order-1 order-lg-2">   
                <form method="post" action="#">
                    @csrf               
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                    <label for="fir">Ukuran</label>
                                    <div class="select-option">
                                    
                                        <select class="sorting">
                                        @foreach($datas as $item)
                                            <option value="{{$item->id_ukuran}}" selected>{{$item->ukuran}} cm</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                            </div>

                            <div class="col-lg-5 col-md-12">
                            <label for="jumlah">Jumlah</label>                                               
                                <input class="form-control" name="qty" type="text" id="jumlah" value="" >

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                            <label for="fir">UPLOAD FILE DESIGN<span>*</span></label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                            <a href="#" class="primary-btn"><i class="fa fa-shopping-cart"></i> add to cart</a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                            <a href="#" class="primary-btn">Pesan</a>
                            </div>
                        </div>
                </form>
                </div>
                 
                </div>   
            </div>
        </div>
        
</section>

@endsection