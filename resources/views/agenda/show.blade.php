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
            <td>Id</td>
            <td>nome</td>
            <td>Data</td>
            <td>horario</td>
            <td>Evento Publico</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$agenda->id}}</td>
            <td>{{$agenda->nome_evento}}</td>
            <td>{{$agenda->data}}</td>
            <td>{{$agenda->horario}}</td>
            <td>{{$agenda->evento_publico}}</td>
          </tr>
        </tbody>
      </table>
  </div>
</div>
@endsection