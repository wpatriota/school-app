@extends('adminlte::page')

@section('content')

<div class="card uper">
  <div class="card-header">
    Editar Curso
  </div>
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
          <td>Descrição</td>
          <td>Data</td>
          <td>Horário</td>
          <td colspan="2">Ações</td>
        </tr>
      </thead>
      <tbody>
          @foreach($agenda as $evento)
          <tr>
              <td>{{$evento->nome_evento}}</td>
              <td>{{$evento->data}}</td>
              <td>{{$evento->horario}}</td>
              <td>{{$evento->horario}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection