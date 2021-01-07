@extends ('layout.main')
@section('tombol')
<div class="panel-heading">
              <a  class="btn btn-light" href ="{{'/produk'}}">
              <i class="fas fa-long-arrow-alt-left"></i>
</a>
            @endsection
@section('content')
@section('judul_halaman', 'ukuran')

<div class="table-responsive">

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead class="sorting_asc">
     
                    <tr>
                        <th width="10px">No</th>
                        <th>Nama Produk</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
            </thead>
            <tbody>
            @foreach($datas as $item)        
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->produk->nama_produk}}</td>
                    <td>{{ $item->ukuran }}</td>
                    <td>Rp. {{ number_format($item->harga) }}</td>
                    <td>
                        <a href="{{ url('/ukuran/' . $item->id_ukuran . '/edit') }}"class="btn btn-success btn-sm ">Edit</a>
                        <form method="POST" action="{{ url('/ukuran' . '/' . $item->id_ukuran) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
                         </table>
           

        <a href="{{ url('/ukuran/' . $ids . '/create') }}"class="btn btn-primary btn-m ">Tambah</a>

        </div>



        
@endsection