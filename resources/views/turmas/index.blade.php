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
        <tr><a href="{{ route('turmas.create')}}" class="btn btn-primary">Nova Turma</a></tr>
        <tr>
          <td>ID</td>
          <td>Curso</td>
          <td>Turma</td>
          <td>Data de Inicio</td>
          <td>Data de termino</td>
          <td>Professor</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
        <tr>
            <td>{{$turma->id}}</td>
            <td>{{$turma->curso->nome}}</td>
            <td>{{$turma->nome}}</td>
            <td>{{ \Carbon\Carbon::parse($turma->data_inicio)->format('d/m/Y')}}</td>
            <td>{{ \Carbon\Carbon::parse($turma->data_termino)->format('d/m/Y')}}</td>
            <td>{{$turma->professor->nome}}</td>
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