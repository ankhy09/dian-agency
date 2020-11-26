@extends ('layout.main')
@section('content')
@section('judul_halaman', 'Data Produk')
<div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead class="sorting_asc">
                            <tr>
                            <th width="10px">No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Action</th>
                            </tr>
            </thead>
            <tbody>
                        @foreach($datas as $item)
                                         
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->deskripsi_produk }}</td>
                                <td><img src="{{asset('images/'. $item->gambar)}}" style="max-height: 200px" alt=""></div></td>
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

        <a href="{{ url('/produk/create') }}"class="btn btn-primary btn-m ">Tambah</a>

        </div>

        
@endsection