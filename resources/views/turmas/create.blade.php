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
      <form method="post" action="{{ route('turmas.store') }}">
        <div class="form-row">
          <div class="form-group col-md-3">
            {!! Form::Label('curso', 'Curso:') !!}
            <select class="form-control" name="id_curso" id="id_curso">
              @foreach($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->nome}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="nome">Nome da turma:</label>
            <input type="text" class="form-control" name="nome"/>
          </div>

          <div class="form-group col-md-3">
            {!! Form::Label('professor', 'Professor:') !!}
            <select class="form-control" name="id_professor" id="id_professor">
              @foreach($professores as $professor)
                <option value="{{$professor->id}}">{{$professor->individuo->nome}}</option>
              @endforeach
            </select>
          </div>
        </div>

          <div class="form-group col-md-6">
              <label for="descricao">Descricao :</label>
              <input type="text" class="form-control" name="descricao"/>
          </div>

          <div class="form-group col-md-3">
            <label for="data_inicio">Data de Inicio :</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="data_inicio" name="data_inicio">
            </div>
          </div>

          <div class="form-group col-md-3">
            <label for="data_termino">Data de Término :</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="data_termino" name="data_termino">
            </div>
          </div>

          <div class="form-group col-md-3">
            <label for="periodo_matricula_de">Período de matrícula (Início):</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="periodo_matricula_de" name="periodo_matricula_de">
            </div>
          </div>

          <div class="form-group col-md-3">
            <label for="periodo_matricula_ate">Período de matrícula (Término):</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="periodo_matricula_ate" name="periodo_matricula_ate">
            </div>
          </div>

          

          <div class="form-group col-md-3">
            {!! Form::Label('dia_aula', 'Dia da semana:') !!}
            <select class="form-control" name="dia_aula" id="dia_aula">
              <option value="domingo">Domingo</option>
              <option value="segunda-feira">Segunda-feira</option>
              <option value="terca-feira">Terça-feira</option>
              <option value="quarta-feira">Quarta-feira</option>
              <option value="quinta-feira">Quinta-feira</option>
              <option value="sexta-feira">Sexta-feira</option>
              <option value="sabado-feira">Sabado</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="horario_aula">Horário Aula</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="horario_aula" name="horario_aula">
            </div>
          </div>

          <div class="form-group col-md-12">
            <label for="frequencia_minima">Frequencia Mínima Exigida</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="frequencia_minima" name="frequencia_minima">
            </div>
          </div>
          <div class="form-row">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>

      </form>
  </div>
</div>
@endsection
