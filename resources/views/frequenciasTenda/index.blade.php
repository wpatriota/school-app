@extends('adminlte::page')

@section('title', 'Sistema Tenda - Cursos')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead class="table-active">
        <tr>
          <td>ID</td>
          <td>Aluno</td>
          <td>Evento</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($frequenciasTenda as $frequenciaTenda)
        <tr>
            <td>{{$frequenciaTenda->id}}</td>
            <td>{{$frequenciaTenda->membro->individuo->nome . ' ' . $frequenciaTenda->membro->individuo->sobrenome}}</td>
            <td>{{$frequenciaTenda->agenda->nome_evento}}</td>
            <td><a href="{{ route('frequenciasColegio.edit',$frequenciaTenda->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('frequenciasColegio.destroy', $frequenciaTenda->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection