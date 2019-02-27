@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Editar Turma
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
      <form method="post" action="{{ route('turmas.update', $turma->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          {!! Form::Label('curso', 'Curso:') !!}
          <select class="form-control" name="id_curso">
            @foreach($cursos as $curso)
              <option value="{{$curso->id}}">{{$curso->nome}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="nome">Nome :</label>
          <input type="text" class="form-control" name="nome" value="{{ $turma->nome }}" />
        </div>
        <div class="form-group">
          <label for="data_inicio">Data Início :</label>
          <input type="text" class="form-control" name="data_inicio" value="{{ \Carbon\Carbon::parse($turma->data_inicio)->format('d/m/Y')}}" />
        </div>
        <div class="form-group">
          <label for="data_inicio">Data Início :</label>
          <input type="text" class="form-control" name="data_termino" value="{{ \Carbon\Carbon::parse($turma->data_termino)->format('d/m/Y')}}" />
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