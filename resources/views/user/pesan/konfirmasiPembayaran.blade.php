@extends ('user.main')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;Home</a>
                        <a href="{{ url('riwayat') }}"><i class="fa fa-history"></i>&nbsp;Riwayat Pemesanan</a>
                        <a href="{{ url('detail') }}"><i class="fa fa-info"></i>&nbsp;Detail Pemesanan</a>
                        <span><i class="fa fa-credit-card"></i>&nbsp;Konfirmasi Pembayaran</span>
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
                            <h2>Konfirmasi Pembayaran</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <section class="contact-section spad">
            <div class="container">
                <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post" action="{{ url('/upload-bukti', $datas->id_pesanan)  }}" >
                                @csrf

                                <div class="form-group row">
                                    <label for="nama" class="col-md-2 col-form-label text-md-right">Nama</label>

                                    <div class="col-md-6">
                                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $datas->pelanggan->nama }}" required autocomplete="nama" autofocus>

                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_telp" class="col-md-2 col-form-label text-md-right">Bank</label>

                                    <div class="col-md-6">
                                        <input id="bank" type="text" class="form-control @error('bank') is-invalid @enderror" name="bank" required autocomplete="bank" autofocus>

                                        @error('bank')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jumlah" class="col-md-2 col-form-label text-md-right">Jumlah Transfer</label>

                                    <div class="col-md-6">
                                        <input id="jumlah" type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ $datas->kode+$datas->total_harga }}" required autocomplete="jumlnah" readonly>

                                        @error('jumlah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="tanggal" class="col-md-2 col-form-label text-md-right">Tanggal Transfer</label>

                                    <div class="col-md-6">
                                        <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" required autocomplete="tanggal">

                                        @error('jumlah')
                                            <span tanggal="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="bukti" class="col-md-2 col-form-label text-md-right">Bukti</label>

                                    <div class="col-md-6">
                                        <input id="bukti" type="file" class="form-control @error('bukti') is-invalid @enderror" name="bukti" required autocomplete="bukti">

                                        @error('bukti')
                                            <span tanggal="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="primary-btn" style="border:none;">
                                            Konfirmasi Pembayaran
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>   
            </div>
            
    </section>
    @endsection