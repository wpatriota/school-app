@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Nova Turma
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
      <form method="post" action="{{ route('turmas.create') }}">
          <div class="form-group">
            {!! Form::Label('curso', 'Curso:') !!}
            <select class="form-control" name="id_curso">
              @foreach($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->nome}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>
          <div class="form-group">
              <label for="descricao">Descricao :</label>
              <input type="text" class="form-control" name="descricao"/>
          </div>

          <div class="form-group">
            <label for="data_inicio">Data de Inicio :</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="data_inicio">
            </div>
          </div>

          <div class="form-group">
            <label for="data_termino">Data de Término :</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="data_termino">
            </div>
          </div>

          <div class="form-group">
            <label for="periodo_matricula_de">Matrícula de:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="periodo_matricula_de">
            </div>
          </div>

          <div class="form-group">
            <label for="periodo_matricula_ate">Matrícula até:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="periodo_matricula_ate">
            </div>
          </div>

          <div class="form-group">
          {!! Form::Label('professor', 'Professor:') !!}
          <select class="form-control" name="id_professor">
            @foreach($professores as $professor)
              <option value="{{$professor->id}}">{{$professor->individuo->nome}}</option>
            @endforeach
          </select>
        </div>
          <button type="submit" class="btn btn-primary">Salvar</button>

      </form>
  </div>
</div>
@endsection
