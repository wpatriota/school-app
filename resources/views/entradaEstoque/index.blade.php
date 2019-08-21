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
        <tr><a href="{{ route('estoque.create')}}" class="btn btn-primary">Nova entrada</a></tr>
        <tr>
          <td>ID</td>
          <td>Responsável</td>
          <td>Tipo</td>
          <td>Quantidade</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($entradasEstoque as $estoque)
        <tr>
            <td>{{$estoque->id}}</td>
            <td>{{$estoque->individuo->nome}}</td>
            <td>{{$estoque->tipoItem->descricao}}</td>
            <td>{{$estoque->quantidade}}</td>
            <td>{{$estoque->data}}</td>
            <td><a href="{{ route('estoque.edit',$estoque->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('estoque.destroy', $estoque->id)}}" method="post">
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