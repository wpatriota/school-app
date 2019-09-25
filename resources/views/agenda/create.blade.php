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
      <form method="post" action="{{ route('agenda.store') }}">
        <div class="form-row">
          <div class="form-group col-md-4">
            {!! Form::Label('tipoEvento', 'Tipo de Evento:') !!}
            <select class="form-control" name="id_tipo_evento">
              @foreach($tiposEvento as $tipoEvento)
                <option value="{{$tipoEvento->id}}">{{$tipoEvento->descricao}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-8">
            @csrf
            <label for="nome_evento">Nome:</label>
            <input type="text" class="form-control" name="nome_evento"/>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="data">Data :</label>
            <input type="text" class="form-control" name="data"/>
          </div>

          <div class="form-group col-md-4">
            <label for="horario">Horário :</label>
            <input type="text" class="form-control" name="horario"/>
          </div>

          <div class="form-group col-md-4">
            <label for="evento_publico">Evento Público :</label>
            <select type="text" class="form-control" name="evento_publico">
              <option value="S">Sim</option>
              <option value="N">Não</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection