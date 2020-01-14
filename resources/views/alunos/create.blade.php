@extends('adminlte::page')

@section('content')
  <div class="card uper">
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
        <form method="post" action="{{ route('alunos.store') }}">
          <div class="form-row">
            <div class="form-group col-md-6">
              {!! Form::Label('curso', 'Curso:') !!}
                <select class="form-control" name="id_turma">
                @foreach($cursos as $curso)
                  <option value="{{$curso->id}}">{{$curso->nome}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-6">
              {!! Form::Label('turma', 'Turma:') !!}
                <select class="form-control" name="id_turma">
                @foreach($turmas as $turma)
                  <option value="{{$turma->id}}">{{$turma->nome}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="radio form-group">
              <label><input type="radio" name="optradio" id="optCadExiste" value="cadExiste" checked>Buscar Cadastro</label>
            </div>
            <div class="radio form-group">
              <label><input type="radio" name="optradio" id="optCadNovo" value="cadNovo">Novo Usuário</label>
            </div>
          </div>

          <div class="form-row" id="cadExiste">
            <div class="form-group col-md-12">
            <input class="typeahead form-control" type="text">
            </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome"/>
          </div>

          <div class="form-group col-md-8">
            <label for="sobrenome">Sobrenome :</label>
            <input type="text" class="form-control" name="sobrenome"/>
          </div>
        </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email :</label>
          <input type="text" class="form-control" name="email"/>
        </div>

        <div class="form-group col-md-3">
          <label for="rg">RG :</label>
          <input type="text" class="form-control" name="rg"/>
        </div>

        <div class="form-group col-md-3">
          <label for="cpf">CPF :</label>
          <input type="text" class="form-control" name="cpf"/>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="endereco">Endereço :</label>
          <input type="text" class="form-control" name="endereco"/>
        </div>

        <div class="form-group col-md-6">
          <label for="bairro">Bairro :</label>
          <input type="text" class="form-control" name="bairro"/>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="cidade">Cidade :</label>
          <input type="text" class="form-control" name="cidade"/>
        </div>

        <div class="form-group col-md-4">
          {!! Form::Label('estado', 'Estado:') !!}
            <select class="form-control" name="id_estado">
              @foreach($uf as $estado)
                <option value="{{$estado->id}}">{{$estado->nome}}</option>
              @endforeach
            </select>
        </div>

        <div class="form-group col-md-4">
          <label for="cep">CEP :</label>
          <input type="text" class="form-control" name="cep"/>
        </div>
      </div>
        
      <div class="form-row">  
        <div class="form-group col-md-4">
          <label for="data_nascimento">Data de Nascimento :</label>
          <input type="text" class="form-control" name="data_nascimento"/>
        </div>

        <div class="form-group col-md-4">
          <label for="telefone">Telefone :</label>
          <input type="text" class="form-control" name="telefone"/>
        </div>

        <!-- <div class="form-group col-md-4">
          <label for="celular">Celular :</label>
          <input type="text" class="form-control" name="celular"/>
        </div> -->
        <div class="form-group col-md-4">
                <label>US phone mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="mask: (999) 99999-9999" data-mask="mask: (999) 99999-9999">
                </div>
                <!-- /.input group -->
              </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="estado_civil">Estado Civil :</label>
          <input type="text" class="form-control" name="estado_civil"/>
        </div>

        <div class="form-group col-md-6">
          <label for="profissao">Profissão :</label>
          <input type="text" class="form-control" name="profissao"/>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="observacao">Observação :</label>
          <input type="text" class="form-control" name="observacao"/>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="data_inicio">Data de Entrada :</label>
          <input type="text" class="form-control" name="data_inicio"/>
        </div>

        <div class="form-group col-md-4">
          <label for="data_saida">Data de Saída :</label>
          <input type="text" class="form-control" name="data_saida"/>
        </div>

        <div class="form-group col-md-4">
          <label for="status">Status :</label>
          <input type="text" class="form-control" name="status"/>
        </div>

          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
  </div>
@endsection

@section('js')
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
@stop