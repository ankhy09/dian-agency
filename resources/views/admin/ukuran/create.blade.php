@extends ('layout.main')
@section('judul_halaman', 'tambah ukuran')
@section('tombol')
<div class="panel-heading">
              <button  class="btn btn-light" onclick="history.go(-1);">
              <i class="fas fa-long-arrow-alt-left"></i>
            </button>
            @endsection
@section('content')
            <!-- form input data--->
            @if ($errors->any())
            <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

                    <form method="POST" action="{{ url('ukuran') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        
                        {{ csrf_field() }}
                        @include ('admin.ukuran.form', ['formMode' => 'create'])
                    </form>

            <!-- form input data--->
@endsection