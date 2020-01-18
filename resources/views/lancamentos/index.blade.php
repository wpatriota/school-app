@extends('adminlte::page')

@section('title', 'Sistema Tenda - Cursos')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('lancamentos.create')}}" class="btn btn-primary">Novo Lancamento</a>
  <table class="display compact data-table table table-striped" id="data-table">
    <thead class="table-active">
        <tr>
          <th>ID</th>
          <th>Tipo</th>
          <th>categoria</th>
          <th>Valor</th>
          <th>Data Lancamento</th>
          <th>Data Vencimento</th>
          <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lancamentos as $lancamento)
        <tr>
            <td>{{$lancamento->id}}</td>
            <td>{{$lancamento->tipoLancamento->tipo}}</td>
            <td>{{$lancamento->tipoLancamento->descricao}}</td>
            <td>{{$lancamento->descricao}}</td>
            <td>{{$lancamento->descricao}}</td>
            <td>{{$lancamento->descricao}}</td>
            <td>{{$lancamento->status}}</td>
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