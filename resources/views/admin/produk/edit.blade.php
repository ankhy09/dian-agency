@extends ('layout.main')
@section('content')
    <div class="panel-heading">
          Edit
        </div>
        <div class="panel-body" style="padding: 20px;">
            <!-- form input data--->
            @if ($errors->any())
            <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

                <form method="POST" action="{{ route('produk.update', $datas->id_produk)}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            @include ('admin.produk.form', ['formMode' => 'edit'])
                </form>

            <!-- form input data--->
    </div>
@endsection