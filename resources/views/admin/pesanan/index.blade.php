@extends ('layout.main')
@section('content')
@section('judul_halaman', 'Data Produk')
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
                                <th>Action</th>
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
                                <td>
                                    <a href="{{ url('/produk/' . $item->id_produk . '/edit') }}"class="btn btn-success btn-sm ">Edit</a>
                                    <a href="{{ url('/ukuran', $item->id_produk)  }}"class="btn btn-primary btn-sm ">Detail</a>
                                    <form method="POST" action="{{ url('/produk' . '/' . $item->id_produk) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
            </table>
            {!! $datas->render() !!}
        </div>

        
@endsection