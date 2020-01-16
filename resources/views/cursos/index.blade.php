@extends('adminlte::page')

@section('title', 'Sistema Tenda - Cursos')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="display compact data-table table table-striped" id="data-table">
    <thead class="table-active">
        <!-- <tr><th><a href="{{ route('cursos.create')}}" class="btn btn-primary">Novo Curso</a></th></tr> -->
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Valor Mensalidade</th>
          <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->nome}}</td>
            <td>{{$curso->descricao}}</td>
            <td>{{'R$ '.number_format($curso->valor_mensalidade, 2, ',', '.')}}</td>
            <td>
            <a href="{{ route('cursos.edit',$curso->id)}}" class="btn btn-primary">Editar</a>
                <form action="{{ route('cursos.destroy', $curso->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-submit" type="submit" id="btn-submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>  
@endsection

@section('js')
  <script>
    $(document).ready(function(){
      $('.data-table').dataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
        }
      });

      $('#btn-submit').on('click',function(e){
        e.preventDefault();
        Swal.fire({
          title: 'Excluir Curso',
          text: "Deseja realmente excluir o curso?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.value) {
            var form = $(this).parents('form');
            form.submit();
          }
        })
      });
    });   
  </script>
@endsection