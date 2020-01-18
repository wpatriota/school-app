@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Novo Curso
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cursos.store') }}">
        <div class="form-row">
          
          <div class="form-group col-md-6">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome"/>
          </div>
          
          <div class="form-group col-md-6">
            <label for="valor_mensalidade">Valor Mensalidade :</label>
            <input type="text" class="form-control" name="valor_mensalidade"/>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="descricao">Descricao :</label>
            <input type="text" class="form-control" name="descricao"/>
          </div>
               
            <button type="submit" class="btn btn-primary btn-submit" id="btn-submit">Salvar</button>
        </div>
          
      </form>
  </div>
</div>
@endsection

@section('js')
<script>
  $(document).ready( function () {
    $('#btn-submit').on('click',function(e){
      e.preventDefault();
      Swal.fire({
        title: 'Novo Curso',
        text: "Deseja salvar?",
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