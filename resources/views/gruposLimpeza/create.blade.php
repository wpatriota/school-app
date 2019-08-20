@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Novo Curso
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
      <form method="post" action="{{ route('cursos.store') }}">
        <div class="form-group">
          <label for="nome">Nome :</label>
          <select class="select2-selection__rendered" name="state">
            @foreach($individuo as $ind)
          <option value="AL">{{$ind->nome}}</option>
           @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection