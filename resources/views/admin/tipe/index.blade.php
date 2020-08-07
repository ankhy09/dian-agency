@extends ('layout.main')
@section('content')
<h1>hallo</h1>
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
                                <td> <img src="{{url('/images/'.$item->gambar) }}" style="height:100px; object-fit: cover"> </td>
                                <td>
                                    <a href="{{ url('/dataproduk/' . $item->id_produk . '/edit') }}"class="btn btn-success btn-sm ">Edit</a>
                                    <form method="POST" action="{{ url('/dataproduk' . '/' . $item->id_produk) }}" accept-charset="UTF-8" style="display:inline">
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