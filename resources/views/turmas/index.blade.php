@extends('adminlte::page')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="display compact data-table table table-striped" id="data-table" style="width:100%">
    <thead>
        <tr><a href="{{ route('turmas.create')}}" class="btn btn-primary">Nova Turma</a></tr>
        <tr>
          <th>ID</th>
          <td>Curso</td>
          <td>Turma</td>
          <td>Data de Inicio</td>
          <td>Data de termino</td>
          <td>Professor</td>
          <td>Período de Matrículas</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
        <tr>
            <td>{{$turma->id}}</td>
            <td>{{$turma->curso->nome}}</td>
            <td><a href="{{ route('turmas.show',$turma->id)}}"><i class="fa fa-eye"></i>{{$turma->nome}}</a></td>
            <td>{{ \Carbon\Carbon::parse($turma->data_inicio)->format('d/m/Y')}}</td>
            <td>{{ \Carbon\Carbon::parse($turma->data_termino)->format('d/m/Y')}}</td>
            <td>{{$turma->professor->individuo->nome}}</td>
            <td><span class="badge bg-green">{{ \Carbon\Carbon::parse($turma->periodo_matricula_de)->format('d/m/Y')}} á {{ \Carbon\Carbon::parse($turma->periodo_matricula_ate)->format('d/m/Y')}}</span></td>
            <td><a href="{{ route('turmas.edit',$turma->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('turmas.destroy', $turma->id)}}" method="post">
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