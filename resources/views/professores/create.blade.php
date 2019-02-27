@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Novo Professor
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
      <form method="post" action="{{ route('professores.store') }}">
        <div class="form-group">
          {!! Form::Label('individuo', 'Individuo:') !!}
          <select class="form-control" name="id_individuo">
            @foreach($individuos as $individuo)
              <option value="{{$individuo->id}}">{{$individuo->nome . ' ' . $individuo->sobrenome}}</option>
            @endforeach
          </select>
        </div>
        
        <div class="form-group">
          <label for="data_inicio">Data de Início :</label>
          <input type="text" class="form-control" name="data_inicio"/>
        </div>

        <div class="form-group">
          <label for="data_termino">Data de Término :</label>
          <input type="text" class="form-control" name="data_termino"/>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection