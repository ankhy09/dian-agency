@extends ('user.main')
@section('content')
<section class="contact-section spad">
        <div class="container">
            <div class="row">
            <div class="col-lg-5 order-1 order-lg-2">
                    <img src="user/img/ava.jpg" height="250px" width="250px">
            </div>
                <div class="col-lg-5 order-1 order-lg-2">   
                <form method="post" action="#">
                    @csrf               
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <h2>Nama Pelanggan</h2>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <h4>Email pelanggan</h4>
                                                <h4>Password</h4>
                                                <h4>No. Telp</h4>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                            <a href="{{ url('/orderansaya') }}" class="primary-btn"> Riwayat Pemesanan</a>
                                            </div>
                                        </div>
                </form>
                </div>
                 
                </div>   
            </div>
        </div>
        
</section>

@endsection