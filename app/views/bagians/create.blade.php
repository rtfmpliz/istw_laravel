 @extends('layouts.master')
 @section('title')
 {{ $title }}
 @stop
 @section('breadcrumb')
 <li><a href="/">Dashboard</a></li>
 <li><a href="{{ route('admin.bagians.index') }}">Bagian</a></li>
 <li class="uk-active">{{ $title }}</li>
 @stop
 @section('content')
 {{ Form::open(array('url' => route('admin.bagians.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal')) }}
 @include('bagians._form')
 {{ Form::close() }}
 @stop
