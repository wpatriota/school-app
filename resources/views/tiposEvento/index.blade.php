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
          <td>ID</td>
          <td>Descrição</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tiposEvento as $tipoEvento)
        <tr>
            <td>{{$tipoEvento->id}}</td>
            <td>{{$tipoEvento->descricao}}</td>
            <td><a href="{{ route('tiposevento.edit',$tipoEvento->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('tiposevento.destroy', $tipoEvento->id)}}" method="post">
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