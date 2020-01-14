@extends('adminlte::page')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <a href="{{ route('usuarios.create')}}" class="btn btn-primary">Novo Usuário</a>
        <a href="{{ route('importExportView')}}" class="btn btn-success">Importar XLS</a>
        <a href="{{ route('export')}}" class="btn btn-success">Exportar XLS</a>
      </tr>
      <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Data de Início</td>
        <td>Data de Saída</td>
        <td>Status</td>
        <td colspan="3">Ações</td>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{ route('perfis.show',$user->id)}}" class="btn btn-primary">Ver Perfil</a> {{$user->name}}</td>
            <td>{{ \Carbon\Carbon::parse($user->data_inicio)->format('d/m/Y')}}</td>
            <td>{{ \Carbon\Carbon::parse($user->data_saida)->format('d/m/Y')}}</td>
            <td>
              @if($user->status == 's' || $user->status == 'S')
                <span class="badge bg-green">ATIVO</span>
              @else
                <span class="badge bg-red">INATIVO</span>
              @endif
            </td>
            <td><a href="{{ route('usuarios.edit', $user->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('usuarios.destroy', $user->id)}}" method="post">
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