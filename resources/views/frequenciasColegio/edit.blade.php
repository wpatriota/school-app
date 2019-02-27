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
      <form method="post" action="{{ route('cursos.update', $curso->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" value="{{ $curso->nome }}" />
        </div>
        <div class="form-group">
          <label for="descricao">Descrição :</label>
          <input type="textarea" class="form-control" name="descricao" value="{{ $curso->descricao }}" />
        </div>
        <div class="form-group">
          <label for="valor_mensalidade">Valor Mensalidade :</label>
          <input type="textarea" class="form-control" name="valor_mensalidade" value="{{ $curso->valor_mensalidade }}"   />
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection