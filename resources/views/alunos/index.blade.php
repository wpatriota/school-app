@extends('adminlte::page')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('alunos.create')}}" class="btn btn-primary">Novo Aluno</a>
  <table class="display compact data-table table table-striped" id="data-table" style="width:100%">
    <thead>
      <tr>
        <th>ID</td>
        <th>Nome</td>
        <th>Turma</td>
        <th>Data Matrícula</td>
        <th colspan="2">Ações</td>
      </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
        <tr>
            <td>{{$aluno->id}}</td>
            <td><a href="{{ route('alunos.show',$aluno->id)}}">{{$aluno->individuo->nome . ' ' . $aluno->individuo->sobrenome}}</a></td>
            <td>{{$aluno->turma->nome}}</td>
            <td>{{ \Carbon\Carbon::parse($aluno->data_matricula)->format('d/m/Y')}}</td>
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

@section('js')
  <script>
    $(document).ready(function(){
      $('.data-table').dataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
        }
      });
    });   
  </script>
@endsection