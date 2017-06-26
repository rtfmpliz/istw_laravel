@section('title')
{{ $title }}
@stop
@section('nav')
<li><a href="#">Truk</a></li>
<li><a href="#">Member</a></li>
<li><a href="#">Peminjaman</a></li>
@stop
@include('layouts.partials.alert')
@section('breadcrumb')
<li>{{ $title }}</li>
@stop
@section('content')
Selamat datang di Menu Administrasi ISTW. Silahkan pilih menu administrasi yang diinginkan.
@stop
