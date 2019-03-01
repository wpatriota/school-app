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
            <td>
              @if($membro->status == 's' || $membro->status == 'S')
                <span class="badge bg-green">ATIVO</span>
              @else
                <span class="badge bg-red">INATIVO</span>
              @endif
            </td>
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