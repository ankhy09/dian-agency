@extends ('layout.main')
@section('content')
<div class="table-responsive">

<h1>Selamat Datang <span style="color:brown">{{ Auth::user()->username }}</span></h1>

        </div>

        
@endsection