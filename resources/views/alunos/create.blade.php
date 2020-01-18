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
        <form method="post" action="{{ route('alunos.store') }}">
          <div class="form-row">
            <div class="form-group col-md-3">
              {!! Form::Label('curso', 'Curso:') !!}
                <select class="form-control" name="id_curso">
                @foreach($cursos as $curso)
                  <option value="{{$curso->id}}">{{$curso->nome}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-3">
              {!! Form::Label('turma', 'Turma:') !!}
                <select class="form-control" name="id_turma">
                @foreach($turmas as $turma)
                  <option value="{{$turma->id}}">{{$turma->nome}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-6">
              {!! Form::Label('individuo', 'Individuo:') !!}
                <select class="form-control" name="id_individuo">
                @foreach($individuos as $individuo)
                  <option value="{{$individuo->id}}">{{$individuo->nome}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="valor_mensalidade">Valor Mensalidade :</label>
              <input type="text" class="form-control" name="valor_mensalidade"/>
            </div>
          </div>      

          <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
    </div>
  </div>
@endsection
