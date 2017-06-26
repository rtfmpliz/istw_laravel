 @extends('layouts.master')
 @section('asset')
 <link rel="stylesheet" href="{{ asset('packages/datatables/css/jquery.dataTables.css' )}}" />
 <script src="{{ asset('packages/datatables/js/jquery.dataTables.js')}}"></script>
@stop

 @section('title-button')
 {{ HTML::buttonAdd() }}
 @stop

 @section('breadcrumb')
 <li>Dashboard</li>
 <li>{{ $title }}</li>
 @stop
 @section('content')
 Tambah Bagian <br>
 {{ Datatable::table()
 ->addColumn('id','Nama', '')
 ->setOptions('aoColumnDefs',array(
 array(
 'bVisible' => false,
 'aTargets' => [0]),
 array(
 'sTitle' => 'Nama',
 'aTargets' => [1]),
 array(
 'bSortable' => false,
 'aTargets' => [2])
 ))
 ->setOptions('bProcessing', true)
 ->setUrl(route('admin.bagians.index'))

->render('datatable.uikit')}}
 @stop

