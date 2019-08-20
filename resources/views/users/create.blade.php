@extends('adminlte::page')

@section('content')
<div class="card uper">
  <div class="card-header">
    Novo Membro
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
      <form method="post" action="{{ route('membros.store') }}">
        <div class="form-group">
          @csrf
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome"/>
        </div>

        <div class="form-group">
          <label for="sobrenome">Sobrenome :</label>
          <input type="text" class="form-control" name="sobrenome"/>
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
          <label for="data_inicio">Data de Entrada :</label>
          <input type="text" class="form-control" name="data_inicio"/>
        </div>

        <div class="form-group">
          <label for="data_saida">Data de Saída :</label>
          <input type="text" class="form-control" name="data_saida"/>
        </div>

        <div class="form-group">
          <label for="status">Status :</label>
          <input type="text" class="form-control" name="status"/>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection