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
        <tr><a href="{{ route('entradasEstoque.create')}}" class="btn btn-primary">Nova entrada</a></tr>
        <tr>
          <td>ID</td>
          <td>Doador</td>
          <td>Tipo</td>
          <td>Quantidade</td>
          <td>Un Medida</td>
          <td>Data</td>
        </tr>
    </thead>
    <tbody>
        @foreach($entradasEstoque as $entradasEstoque)
        <tr>
            <td>{{$entradasEstoque->id_entrada_estoque}}</td>
            <td>{{$entradasEstoque->individuo->nome}}</td>
            <td>{{$entradasEstoque->tipo->nome}}</td>
            <td>{{$entradasEstoque->unidadeMedida->nome}}</td>
            <td>{{$entradasEstoque->data_entrega}}</td>
            <td><a href="{{ route('entradasEstoque.edit',$entradasEstoque->id)}}" class="btn btn-primary">Editar</a></td>            
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection