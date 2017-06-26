 @extends('layouts.master')
 @section('title')
 {{ $title }}
 @stop
 @section('breadcrumb')
 <li><a href="/">Dashboard</a></li>
 <li><a href="{{ route('admin.jabatans.index') }}">jabatan</a></li>
 <li class="uk-active">{{ $title }}</li>
 @stop
 @section('content')
 {{ Form::open(array('url' => route('admin.jabatans.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal')) }}
 @include('jabatans._form')
 {{ Form::close() }}
 @stop
