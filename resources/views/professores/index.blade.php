@extends('adminlte::page')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('professores.create')}}" class="btn btn-primary">Novo Professor</a>
  <table class="display compact data-table table table-striped" id="data-table" style="width: 100%">
    <thead>
      <tr>
        <td>ID</td>
        <td>Nome</td>
        <td colspan="2">Ações</td>
      </tr>
    </thead>
    <tbody>
      @foreach($professores as $professor)
        <tr>
          <td>{{$professor->id}}</td>
          <td>{{$professor->individuo->nome}}</td>
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