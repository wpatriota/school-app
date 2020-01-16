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
      <tr><a href="{{ route('agenda.create')}}" class="btn btn-primary">Adicionar Evento</a></tr>
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

  <div id='calendar'></div>
<div>
@endsection

@section('js')
  <script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            events : [
                @foreach($agendas as $agenda)
                {
                    title : '{{ $agenda->nome_evento }}',
                    start : '{{ $agenda->data }}',
                    @if ($agenda->horario)
                            end: '{{ $agenda->horario }}',
                    @endif
                },
                @endforeach
            ],
        });
    });
  </script>
@endsection