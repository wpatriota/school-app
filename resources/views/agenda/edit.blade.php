@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Editar Evento
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
      <form method="post" action="{{ route('agenda.update', $agenda->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" value="{{ $agenda->nome_evento }}" />
        </div>
        <div class="form-group">
          <label for="descricao">Descrição :</label>
          <input type="textarea" class="form-control" name="descricao" value="{{ $agenda->descricao }}" />
        </div>
        <div class="form-group">
          <label for="valor_mensalidade">Valor Mensalidade :</label>
          <input type="textarea" class="form-control" name="valor_mensalidade" value="{{ $agenda->valor_mensalidade }}"   />
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection