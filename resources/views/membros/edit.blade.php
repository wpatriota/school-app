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
      <form method="post" action="{{ route('membros.update', $membro->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="{{ $membro->individuo->nome }}"/>
          </div>

          <div class="form-group col-md-8">
            <label for="sobrenome">Sobrenome :</label>
            <input type="text" class="form-control" name="sobrenome" value="{{ $membro->individuo->sobrenome }}"/>
          </div>
        </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email :</label>
          <input type="text" class="form-control" name="email" value="{{$membro->individuo->email}}" />
        </div>

        <div class="form-group col-md-3">
          <label for="rg">RG :</label>
          <input type="text" class="form-control" name="rg" value="{{$membro->individuo->rg}}"/>
        </div>

        <div class="form-group col-md-3">
          <label for="cpf">CPF :</label>
          <input type="text" class="form-control" name="cpf" value="{{$membro->individuo->cpf}}"/>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="endereco">Endereço :</label>
          <input type="text" class="form-control" name="endereco" value="{{$membro->individuo->endereco}}"/>
        </div>

        <div class="form-group col-md-6">
          <label for="bairro">Bairro :</label>
          <input type="text" class="form-control" name="bairro" value="{{$membro->individuo->bairro}}"/>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="cidade">Cidade :</label>
          <input type="text" class="form-control" name="cidade" value="{{$membro->individuo->cidade}}"/>
        </div>

        <div class="form-group col-md-4">
          <label for="estado">Estado :</label>
          <input type="text" class="form-control" name="estado" value="{{$membro->individuo->estado}}"/>
        </div>

        <div class="form-group col-md-4">
          <label for="cep">CEP :</label>
          <input type="text" class="form-control" name="cep" value="{{$membro->individuo->cep}}"/>
        </div>
      </div>
        
      <div class="form-row">  
        <div class="form-group col-md-4">
          <label for="data_nascimento">Data de Nascimento :</label>
          <input type="text" class="form-control" name="data_nascimento" value="{{$membro->individuo->data_nascimento}}"/>
        </div>

        <div class="form-group col-md-4">
          <label for="telefone">Telefone :</label>
          <input type="text" class="form-control" name="telefone" value="{{$membro->individuo->telefone}}"/>
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
                  <input type="text" class="form-control" data-inputmask="mask: (999) 99999-9999" data-mask="" value="{{$membro->individuo->celular}}">
                </div>
                <!-- /.input group -->
              </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="estado_civil">Estado Civil :</label>
          <input type="text" class="form-control" name="estado_civil" value="{{$membro->individuo->estado_civil}}"/>
        </div>

        <div class="form-group col-md-6">
          <label for="profissao">Profissão :</label>
          <input type="text" class="form-control" name="profissao" value="{{$membro->individuo->profissao}}"/>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="observacao">Observação :</label>
          <input type="text" class="form-control" name="observacao" value="{{$membro->individuo->observacao}}"/>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="data_inicio">Data de Entrada :</label>
          <input type="text" class="form-control" name="data_inicio" value="{{$membro->data_inicio}}"/>
        </div>

        <div class="form-group col-md-4">
          <label for="data_saida">Data de Saída :</label>
          <input type="text" class="form-control" name="data_saida" value="{{$membro->data_saida}}"/>
        </div>

        <div class="form-group col-md-4">
          <label for="status">Status :</label>
          <input type="text" class="form-control" name="status" value="{{$membro->status}}"/>
        </div>
      </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection