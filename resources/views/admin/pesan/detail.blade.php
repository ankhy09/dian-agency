@extends ('layout.main')

@section('tombol')
<div class="panel-heading">
              <button  class="btn btn-light" onclick="history.go(-1);">
              <i class="fas fa-long-arrow-alt-left"></i>
            </button>
            @endsection
@section('content')

@section('content')
@section('judul_halaman', 'Detail Pesanan')
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead class="sorting_asc">
            <tr>
                <th width="10px">No</th>
                <th>File</th>
                <th>Nama Project</th>
                <th>Pesan Cetak</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>QTY</th>
                <th>Jumlah Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pesanan_detail as $details)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{url('/images/pesanan/' . $details->file)}}" style="max-height: 50px" alt=""></td>
                <td>{{$details->nama_project}}</td>
                <td>{{$details->ukuran->produk->nama_produk}}</td>
                <td>{{$details->ukuran->ukuran}}</td>
                <td>{{number_format ($details->ukuran->harga)}}</td>
                <td>{{$details->qty}}</td>
                <td>Rp. {{number_format ($details->jumlah_harga)}}</td>
                <td>
                    <a href="{{ url('/download' . '/' . $details->id_pesanan) }}"class="btn btn-primary btn-sm "><i class="fa fa-download" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $pesanan_detail->render() !!}
    <a href="{{ url('/konfirmasi' . '/' . $details->id_pesanan) }}"class="btn btn-success btn-m "><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Konfirmasi Pembayaran</a>
    <a href="{{ url('/invoice' . '/' . $details->id_pesanan) }}"class="btn btn-primary btn-m "><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;Kirim E-Faktur</a>
</div>

        
@endsection