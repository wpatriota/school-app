@extends('adminlte::page')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
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
          <label for="id_curso">Nome:</label>
          <input type="text" class="form-control" name="id_curso" value="{{ $turma->id_curso }}" />
        </div>
        <div class="form-group">
          <label for="nome">Descrição :</label>
          <input type="textarea" class="form-control" name="nome" value="{{ $turma->nome }}" />
        </div>
        <div class="form-group">
          <label for="data_inicio">Valor Mensalidade :</label>
          <input type="textarea" class="form-control" name="data_inicio" value="{{ $turma->data_inicio }}" />
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection