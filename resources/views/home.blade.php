{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Sistema Tenda')

@section('content_header')
    
@stop

@section('content')
    <div class="col-md-6">
    	<div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title">Avisos</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                @foreach($avisos as $aviso)   
                <div class="box box-success">{{$aviso->texto}}</div>
                @endforeach
            </div><!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-6">
        <div id='calendar'></div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script type="text/javascript" src="/public/js/app.js"></script>
    <script>
        $(function() {
            $('#calendar').fullCalendar({
            })
        });
    </script>
@stop