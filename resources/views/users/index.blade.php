@extends('adminlte::page')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="display compact data-table table table-striped" id="data-table">
    <thead>
      <tr>
        <a href="{{ route('usuarios.create')}}" class="btn btn-primary">Novo Usuário</a>
        <a href="{{ route('importExportView')}}" class="btn btn-success">Importar XLS</a>
        <a href="{{ route('export')}}" class="btn btn-success">Exportar XLS</a>
      </tr>
      <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Data de Início</td>
        <td>Data de Saída</td>
        <td>Status</td>
        <td colspan="3">Ações</td>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{ route('perfis.show',$user->id)}}" class="btn btn-primary">Ver Perfil</a> {{$user->name}}</td>
            <td>{{ \Carbon\Carbon::parse($user->data_inicio)->format('d/m/Y')}}</td>
            <td>{{ \Carbon\Carbon::parse($user->data_saida)->format('d/m/Y')}}</td>
            <td>
              @if($user->status == 's' || $user->status == 'S')
                <span class="badge bg-green">ATIVO</span>
              @else
                <span class="badge bg-red">INATIVO</span>
              @endif
            </td>
            <td><a href="{{ route('usuarios.edit', $user->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('usuarios.destroy', $user->id)}}" method="post">
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