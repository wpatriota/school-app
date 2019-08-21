@extends('adminlte::page')

@section('title', 'Sistema Tenda - Cursos')

@section('content')
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead class="table-active">
        <tr><a href="{{ route('saidasFinanceiro.create')}}" class="btn btn-primary">Nova entrada</a></tr>
        <tr>
          <td>id</td>
          <td>id_tipo_financeiro</td>
          <td>id_forma_pagamento</td>
          <td>valor</td> 
          <td>data</td>  
          <td>mes_referencia</td>  
          <td>ano_referencia</td>    
          <td>created_at</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($saidasFinanceiro as $saidaFinanceiro)
        <tr>
            <td>{{$saidaFinanceiro->id}}</td>
            <td>{{$saidaFinanceiro->id_tipo_financeiro}}</td>
            <td>{{$saidaFinanceiro->id_forma_pagamento}}</td>
            <td>{{$saidaFinanceiro->valor}}</td>
            <td>{{$saidaFinanceiro->data}}</td>
            <td>{{$saidaFinanceiro->mes_referencia}}</td>
            <td>{{$saidaFinanceiro->ano_referencia}}</td>
            <td>{{$saidaFinanceiro->created_at}}</td>
            <td><a href="{{ route('saidasFinanceiro.edit',$saidaFinanceiro->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('saidasFinanceiro.destroy', $saidaFinanceiro->id)}}" method="post">
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