@extends('adminlte::page')

@section('scripts')
    <script>
      $('.teste').DataTable();
    </script>
@stop

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped teste" id="teste">
    <thead>
      <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Descricao</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$curso->id}}</td>
        <td>{{$curso->nome}}</td>  
        <td>{{$curso->descricao}}</td>      
      </tr>
    </tbody>
  </table>
  <table class="table table-striped teste" id="teste">
    <thead>
      <tr>
        <td>ID</td>
        <td>Nome</td>
      </tr>
    </thead>
    <tbody>
      @foreach($turmas as $turma)
      <tr>
        <td>{{$turma->id}}</td>
        <td>{{$turma->nome}}</td>      
      </tr>
      @endforeach
    </tbody>
  </table>
<div>
@endsection

