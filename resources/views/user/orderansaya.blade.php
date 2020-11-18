@extends ('user.main')
@section('content')
<section class="contact-section spad">
        <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead class="sorting_asc">
                            <tr>
                                <th width="10px">No</th>
                                <th>Kode Pemesanan</th>
                                <th>Nama Pelanggan</th>
                                <th>Pesanan Cetak</th>
                                <th>Ukuran</th>
                                <th>QTY</th>
                                <th>Harga Cetak</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Status</th>
                            </tr>
            </thead>
            <tbody>
                        @foreach($datas as $item)
                                         
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id_pemesanan }}</td>
                                <td>{{ $item->id_pelanggan }}</td>
                                <td>{{ $item->id_ukuran }}</td>
                                <td>{{ $item->ukuran }}</td>                              
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->tgl }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
            </table>
            {!! $datas->render() !!}
        </div>
        
</section>

@endsection