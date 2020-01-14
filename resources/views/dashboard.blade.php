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
			<a href="{{ route('agenda.create')}}" class="btn btn-primary">Adicionar Evento</a>
		</div>
		 <table class="table table-condensed">
		    <thead>
		    	<tr>
		          	<td>Nome</td>
		          	<td>Data</td>
		          	<td>Horário</td>
		        </tr>
		    </thead>
		    <tbody>
		        @foreach($agendas as $agenda)		        
			        <tr>
			            <td><a href="{{ route('agenda.show',$agenda->id)}}">{{$agenda->nome_evento}}</a></td>
			            <td>{{ \Carbon\Carbon::parse($agenda->data)->format('d/m/Y')}}</td>
			            <td>{{$agenda->horario}}</td> 
			        </tr>
		    	
		        @endforeach
		    </tbody>
		</table>
	</div>	
</div>
<div class="col-md-6">
	<div class="box ">
		<div class="box-header with-border">
           	<h3 class="box-title">Turmas Abertas</h3>
        </div>
		 <table class="table table-condensed">
		    <thead>
		    	<tr>
		          	<td>Curso</td>
		          	<td>Turma</td>
		        </tr>
		    </thead>
		    <tbody>
		        @foreach($turmas as $turma)		        
			        <tr>
			        	<td><a href="{{ route('cursos.show',$turma->curso->id)}}">{{$turma->curso->nome}}</a></td>
			            <td><a href="{{ route('turmas.show',$turma->id)}}">{{$turma->nome}}</a></td>
			            <td><a href="{{ route('alunos.create')}}" class="btn btn-success">Matrícula</a></td>
			        </tr>
		    	
		        @endforeach
		    </tbody>
		</table>
	</div>	
</div>
@stop
