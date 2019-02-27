@extends('adminlte::page')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
      <tr><a href="{{ route('professores.create')}}" class="btn btn-primary">Novo Professor</a></tr>
      <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Turma</td>
        <td>Data Matrícula</td>
        <td colspan="2">Ações</td>
      </tr>
    </thead>
    <tbody>
        @foreach($professores as $professor)
        <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->individuo->nome}}</td>
            <td>{{ \Carbon\Carbon::parse($professor->data_matricula)->format('d/m/Y')}}</td>
            <td><a href="{{ route('professores.edit',$professor->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('professores.destroy', $professor->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection