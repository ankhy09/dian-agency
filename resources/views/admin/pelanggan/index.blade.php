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
                @foreach($pelanggan as $user)            
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$user->pelanggan->nama}}</td>
                        <td>{{$user->pelanggan->email}}</td>
                        <td>{{$user->pelanggan->no_hp}}</td>
                        <td>
                            <form method="POST" action="#" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Pesanan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pelanggan->render() !!}
        </div>

        
@endsection