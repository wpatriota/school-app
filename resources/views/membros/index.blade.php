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
      <tr><a href="{{ route('membros.create')}}" class="btn btn-primary">Novo Membro</a></tr>
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
        @foreach($membros as $membro)
        <tr>
            <td>{{$membro->id}}</td>
            <td>{{$membro->individuo->nome}}</td>
            <td>{{ \Carbon\Carbon::parse($membro->data_inicio)->format('d/m/Y')}}</td>
            <td>{{ \Carbon\Carbon::parse($membro->data_saida)->format('d/m/Y')}}</td>
            <td><span class="badge bg-green">{{$membro->status}}</span></td>
            <td><a href="{{ route('membros.show',$membro->id)}}" class="btn btn-primary">Ver Dados</a></td>
            <td><a href="{{ route('membros.edit',$membro->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('membros.destroy', $membro->id)}}" method="post">
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