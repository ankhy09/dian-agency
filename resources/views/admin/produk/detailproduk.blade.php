@extends ('layout.main')
@section('content')
<div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead class="sorting_asc">
                <h1>{{ $datas->nama_produk}}</h1>
                    <tr>
                        <th width="10px">No</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Action</th>

                    </tr>
            </thead>
            <tbody>
                       
                        </tbody>
            </table>

        <a href="{{ url('/ukuran/create') }}"class="btn btn-primary btn-m ">Tambah</a>
</div>


        
@endsection