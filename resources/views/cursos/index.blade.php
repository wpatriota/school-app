@extends('adminlte::page')

@section('title', 'Sistema Tenda - Cursos')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped teste" id="teste">
    <thead class="table-active">
        <tr><a href="{{ route('cursos.create')}}" class="btn btn-primary">Novo Curso</a></tr>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Descrição</td>
          <td>Valor Mensalidade</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->id}}</td>
            <td>{{$curso->nome}}</td>
            <td>{{$curso->descricao}}</td>
            <td>{{'R$ '.number_format($curso->valor_mensalidade, 2, ',', '.')}}</td>
            <td><a href="{{ route('cursos.edit',$curso->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('cursos.destroy', $curso->id)}}" method="post">
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

@section('scripts')
    <script>
      $(document).ready(function() {
      $('.teste').DataTable();
  } );

    </script>
@stop