@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Novo Evento
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
      <form method="post" action="{{ route('agenda.store') }}">
        <div class="form-group">
          {!! Form::Label('tipoEvento', 'Tipo de Evento:') !!}
          <select class="form-control" name="id_tipo_evento">
            @foreach($tiposEvento as $tipoEvento)
              <option value="{{$tipoEvento->id}}">{{$tipoEvento->descricao}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          @csrf
          <label for="nome_evento">Nome:</label>
          <input type="text" class="form-control" name="nome_evento"/>
        </div>

        <div class="form-group">
          <label for="data">Data :</label>
          <input type="text" class="form-control" name="data"/>
        </div>

        <div class="form-group">
          <label for="horario">Horário :</label>
          <input type="text" class="form-control" name="horario"/>
        </div>

        <div class="form-group">
          <label for="evento_publico">Evento Público :</label>
          <input type="text" class="form-control" name="evento_publico"/>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection