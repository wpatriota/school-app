@extends('adminlte::page')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>id_curso</td>
          <td>nome</td>
          <td>data de Inicio</td>
          <td>data de termino</td>
          <td>id do professor</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
        <tr>
            <td>{{$turma->id}}</td>
            <td>{{$turma->id_curso}}</td>
            <td>{{$turma->nome}}</td>
            <td>{{$turma->data_inicio}}</td>
            <td>{{$turma->data_termino}}</td>
            <td>{{$turma->id_professor}}</td>
            <td><a href="{{ route('turmas.edit',$turma->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('turmas.destroy', $turma->id)}}" method="post">
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