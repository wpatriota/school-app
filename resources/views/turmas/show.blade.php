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
        <td>Data Matrícula</td>
      </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
        <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->individuo->nome . ' ' . $aluno->individuo->sobrenome}}</td>
            <td>{{ \Carbon\Carbon::parse($aluno->data_matricula)->format('d/m/Y')}}</td>        
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

