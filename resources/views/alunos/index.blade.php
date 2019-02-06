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
          <td>Nome</td>
          <td>Turma</td>
          <td>Data Matrícula</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
        <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->id_individuo}}</td>
            <td>{{$aluno->id_turma}}</td>
            <td>{{$aluno->data_matricula}}</td>
            <td><a href="{{ route('alunos.edit',$aluno->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('alunos.destroy', $aluno->id)}}" method="post">
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