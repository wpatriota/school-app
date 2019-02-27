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
        <tr><a href="{{ route('frequenciasColegio.create')}}" class="btn btn-primary">Nova entrada</a></tr>
        <tr>
          <td>ID</td>
          <td>Aluno</td>
          <td>Evento</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($frequenciasColegio as $frequenciaColegio)
        <tr>
            <td>{{$frequenciaColegio->id}}</td>
            <td>{{$frequenciaColegio->aluno->individuo->nome . ' ' . $frequenciaColegio->aluno->individuo->sobrenome}}</td>
            <td>{{$frequenciaColegio->agenda->nome_evento}}</td>
            <td><a href="{{ route('frequenciasColegio.edit',$frequenciaColegio->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('frequenciasColegio.destroy', $frequenciaColegio->id)}}" method="post">
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