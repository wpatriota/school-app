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
        <tr><a href="{{ route('gruposLimpeza.create')}}" class="btn btn-primary">Nova entrada</a></tr>
        <tr>
          <td>ID</td>
          <td>Aluno</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($gruposLimpeza as $grupoLimpeza)
        <tr>
            <td>{{$grupoLimpeza->id}}</td>
            <td>{{$grupoLimpeza->individuo->nome . ' ' . $grupoLimpeza->individuo->sobrenome}}</td>
            <td>
                <form action="{{ route('frequenciasColegio.destroy', $grupoLimpeza->id)}}" method="post">
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