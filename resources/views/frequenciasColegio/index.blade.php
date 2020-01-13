@extends('adminlte::page')

@section('title', 'Sistema Tenda - Cursos')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead class="table-active">
        <tr>
          <td>Curso</td>
          <td>Turma</td>
          <td>Professor</td>
          <td>Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
        <tr>
            <td>{{$turma->curso->nome}}</td>
            <td>{{$turma->nome}}</td>
            <td>{{$turma->professor->individuo->nome}}</td>
            <td><a href="" class="btn btn-primary">Lançar Frequencia</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <table class="table table-striped">
    <thead class="table-active">
        <tr>
          <td>Evento</td>
          <td>Data</td>
          <td>Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($eventos as $evento)
        <tr>
            <td>{{$evento->nome_evento}}</td>
            <td>{{$evento->data}}</td>
            <td><a href="" class="btn btn-primary">Lançar Frequencia</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection