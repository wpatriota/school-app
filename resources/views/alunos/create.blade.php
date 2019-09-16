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
              {!! Form::Label('individuo', 'Individuo:') !!}
                <select class="form-control" name="id_turma">
                @foreach($individuos as $individuo)
                  <option value="{{$individuo->id}}">{{$individuo->nome}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div id="cadNovo" style="display: none">
            <div class="form-row">
              <div class="form-group col-md-6">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome"/>
              </div>

              <div class="form-group col-md-6">
                <label for="sobrenome">Sobrenome :</label>
                <input type="text" class="form-control" name="sobrenome"/>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email"/>
            </div>

            <div class="form-group">
              <label for="rg">RG :</label>
              <input type="text" class="form-control" name="rg"/>
            </div>

            <div class="form-group">
              <label for="cpf">CPF :</label>
              <input type="text" class="form-control" name="cpf"/>
            </div>

            <div class="form-group">
              <label for="telefone">Telefone :</label>
              <input type="text" class="form-control" name="telefone"/>
            </div>

            <div class="form-group">
              <label for="celular">Celular :</label>
              <input type="text" class="form-control" name="celular"/>
            </div>

            <div class="form-group">
              <label for="endereco">Endereço :</label>
              <input type="text" class="form-control" name="endereco"/>
            </div>

            <div class="form-group">
              <label for="bairro">Bairro :</label>
              <input type="text" class="form-control" name="bairro"/>
            </div>

            <div class="form-group">
              <label for="cidade">Cidade :</label>
              <input type="text" class="form-control" name="cidade"/>
            </div>

            <div class="form-group">
              <label for="estado">Estado :</label>
              <input type="text" class="form-control" name="estado"/>
            </div>

            <div class="form-group">
              <label for="cep">CEP :</label>
              <input type="text" class="form-control" name="cep"/>
            </div>

            <div class="form-group">
              <label for="data_nascimento">Data de Nascimento :</label>
              <input type="text" class="form-control" name="data_nascimento"/>
            </div>

            <div class="form-group">
              <label for="estado_civil">Estado Civil :</label>
              <input type="text" class="form-control" name="estado_civil"/>
            </div>

            <div class="form-group">
              <label for="profissao">Profissão :</label>
              <input type="text" class="form-control" name="profissao"/>
            </div>

            <div class="form-group">
              <label for="observacao">Observação :</label>
              <input type="text" class="form-control" name="observacao"/>
            </div>

            <div class="form-group">
              <label for="data_matricula">Data de Matrícula :</label>
              <input type="text" class="form-control" name="data_matricula"/>
            </div>

            <div class="form-group">
              <label for="valor_mensalidade">Valor da Mensalidade :</label>
              <input type="text" class="form-control" name="valor_mensalidade"/>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
  </div>
@endsection

@section('js')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.optCadNovo').change(function(){
        alert($(this).val());
        document.getElementById('cadNovo').style.display="block";
        document.getElementById('cadExiste').style.display="none";
      })

      $('.optCadExiste').change(function(){
        alert($(this).val());
        document.getElementById('cadNovo').style.display="none";
        document.getElementById('cadExiste').style.display="block";
      })
    });
  </script>
@stop