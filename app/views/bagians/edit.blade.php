 @extends('layouts.master')
 @section('title')
 {{ $title }}
 @stop
 @section('breadcrumb')
 <li><a href="/">Dashboard</a></li>
 <li><a href="{{ route('admin.bagians.index') }}">Penulis</a></li>
 <li class="uk-active">{{ $title }}</li>
 @stop
 @section('content')
 {{ Form::model($bagian, array('url' => route('admin.bagians.update', ['bagians'=>$bagian->id]), 'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
 @include('bagians._form')
 {{ Form::close() }}
 @stop
