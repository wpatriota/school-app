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
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">
        <thead>
          <tr>
            <td>Nome</td>
            <td>RG</td>
            <td>CPF</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>Endereço</td>
            <td>Data de Nascimento</td>
            <td>Estado Civil</td>
            <td>Profissão</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$individuo->nome}}{{$individuo->sobrenome}}</td>
            <td>{{$individuo->rg}}</td>
            <td>{{$individuo->cpf}}</td>
            <td>{{$individuo->telefone}}</td>
            <td>{{$individuo->celular}}</td>
            <td>{{$individuo->endereco}}{{$individuo->bairro}}{{$individuo->cidade}}{{$individuo->estado}}{{$individuo->cep}}</td>
            <td>{{$individuo->data_nascimento}}</td>
            <td>{{$individuo->estado_civil}}</td>
            <td>{{$individuo->profissao}}</td>
          </tr>
        </tbody>
      </table>

      @if($membro)
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Membro desde</td>
            <td>Status</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$membro->data_inicio}}</td>
            <td>{{$membro->status}}</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">
        <thead>
          <tr>
            <td>Turma</td>
            <td>Data Matrícula</td>
          </tr>
        </thead>
        <tbody>
          @foreach($aluno as $al)
          <tr>
            <td><a href="{{ route('turmas.show', $al->turma->id) }}">{{$al->turma->nome}}</a></td>
            <td>{{$al->data_matricula}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif
  </div>
</div>
@endsection