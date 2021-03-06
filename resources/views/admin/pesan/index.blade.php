@extends ('layout.main')
@section('content')
@section('judul_halaman', 'Data Pesanan')
<div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead class="sorting_asc">
                    <tr>
                        <th width="10px">No</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Kode</th>
                        <th>Status</th>
                        <th>Bukti</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($pesanans as $pesan)            
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$pesan->pelanggan->nama}}</td>
                        <td>{{$pesan->tanggal}}</td>
                        <td>Rp. {{ number_format($pesan->total_harga+$pesan->kode) }}</td>
                        <td>{{$pesan->kode}}</td>
                        <td> @if($pesan->status == 1)
                                            Belum Bayar
                                        @else
                                            Sudah Bayar 
                                        @endif
                        </td>
                        @if(!empty($pesan->konfirmasipembayaran->bukti))
                        <td><img src="{{url('/images/bukti/' . $pesan->konfirmasipembayaran->bukti)}}" style="max-height: 50px" alt=""></td>
                        @else
                        <td>belum ada bukti </td>
                        @endif
                        <td>
                            <a href="{{ url('/datapesanan' . '/' . $pesan->id_pesanan) }}"class="btn btn-primary btn-sm " title="Detail Pesanan"><i class="fas fa-info"></i>&nbsp;&nbsp;Detail</a>
                            <form method="POST" action="{{ url('/datapesanan' . '/' . $pesan->id_pesanan) }}" accept-charset="UTF-8" style="display:inline">
                            @method('DELETE')
                            @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Pesanan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pesanans->render() !!}
        </div>   
@endsection