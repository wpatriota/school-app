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
      <tr>
        <a href="{{ route('entradasEstoque.index')}}" class="btn btn-success">Entradas</a>
        <a href="{{ route('saidasEstoque.index')}}" class="btn btn-danger">Saídas</a>
      </tr>
        <tr>
          <td>Tipo</td>
          <td>Quantidade Disponível</td>
          <td>Quantidade Mínima</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($estoques as $estoque)
        <tr>
            <td>{{$estoque->tipoItem->descricao}}</td>
            <td>{{$estoque->quantidade}}</td>
            <td>{{$estoque->quantidade_minima}}</td>
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