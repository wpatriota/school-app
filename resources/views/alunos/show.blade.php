@extends('adminlte::page')

@section('content')

<div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Turma</td>
            <td>Data de Matrícula</td>
            <td>Valor Mensalidade</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->individuo->nome}} {{$aluno->individuo->sobrenome}}</td>
            <td>{{$aluno->turma->nome}}</td>
            <td>{{$aluno->data_matricula}}</td>
            <td>{{$aluno->valor_mensalidade}}</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">
        <thead>
          <tr>
            <td>Data</td>
            <td>Aula</td>
          </tr>
        </thead>
        <tbody>
          @foreach($frequenciaColegio as $frequencia)
            <tr>
              <td>{{$frequencia->agenda->data}}</td>
              <td>{{$frequencia->agenda->nome_evento}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</div>
@endsection