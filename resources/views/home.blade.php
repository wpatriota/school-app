{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Sistema Tenda')

@section('content_header')
    
@stop

@section('content')
<div class="col-md-6">
	<div class="box ">
		<div class="box-header">
			<h3 class="box-title">Próximos Eventos</h3>
			<a href="{{ route('turmas.create')}}" class="btn btn-primary">Adicionar Evento</a>
		</div>
		 <table class="table table-condensed">
		    <thead>
		    	<tr>
		        	<td>ID</td>
		          	<td>Nome</td>
		          	<td>Data</td>
		          	<td>Horário</td>
		        </tr>
		    </thead>
		    <tbody>
		        @foreach($agendas as $agenda)		        
			        <tr>
			        	<td><a href="{{ route('agenda.edit',$agenda->id)}}">{{$agenda->id}}</a></td>
			            <td><a href="{{ route('agenda.edit',$agenda->id)}}">{{$agenda->nome_evento}}</a></td>
			            <td>{{ \Carbon\Carbon::parse($agenda->data)->format('d/m/Y')}}</td>
			            <td>{{$agenda->horario}}</td> 
			        </tr>
		    	
		        @endforeach
		    </tbody>
		</table>
	<div>	
</div>
<div class="col-md-6"></div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
