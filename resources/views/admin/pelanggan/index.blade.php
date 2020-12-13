@extends ('layout.main')
@section('content')
@section('judul_halaman', 'Data Pesanan')
<div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead class="sorting_asc">
                    <tr>
                        <th width="10px">No</th>
                        <th>Nama</th>
                        <th>No. Hp</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($datas as $user)            
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$user->nama}}</td>
                        <td>{{$user->no_telp}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="#"class="btn btn-primary btn-sm">Riwayat Belanja</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $datas->render() !!}
        </div>

        
@endsection