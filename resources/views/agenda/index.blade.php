@extends('adminlte::page')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
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
          <td>Categoria Evento</td>
          <td>Nome</td>
          <td>Data</td>
          <td>Horário</td>
          <td>Tipo do Evento</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($agendas as $agenda)
        <tr>
            <td>{{$agenda->id}}</td>
            <td>{{$agenda->tipoEvento->descricao}}</td>
            <td>{{$agenda->nome_evento}}</td>
            <td>{{$agenda->data}}</td>
            <td>{{$agenda->horario}}</td>
            <td>{{$agenda->publico}}</td>
            <td><a href="{{ route('agenda.edit',$agenda->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('agenda.destroy', $agenda->id)}}" method="post">
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