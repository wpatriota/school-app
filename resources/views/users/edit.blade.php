@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Editar Usuário
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
      <form method="post" action="{{ route('usuarios.update', $user->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nome:</label>
          <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
        </div>
        <div class="form-group">
          <label for="email">Descrição :</label>
          <input type="textarea" class="form-control" name="email" value="{{ $user->email }}" />
        </div>
        
        <div class="form-group">
          <label for="password">Descrição :</label>
          <input type="textarea" class="form-control" name="password" value="{{ $user->password }}" />
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection