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
        <tr><a href="{{ route('entradasFinanceiro.create')}}" class="btn btn-primary">Nova entrada</a></tr>
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
        @foreach($entradasFinanceiro as $entradaFinanceiro)
        <tr>
            <td>{{$entradaFinanceiro->id}}</td>
            <td>{{$entradaFinanceiro->id_tipo_financeiro}}</td>
            <td>{{$entradaFinanceiro->id_forma_pagamento}}</td>
            <td>{{$entradaFinanceiro->valor}}</td>
            <td>{{$entradaFinanceiro->data}}</td>
            <td>{{$entradaFinanceiro->mes_referencia}}</td>
            <td>{{$entradaFinanceiro->ano_referencia}}</td>
            <td>{{$entradaFinanceiro->created_at}}</td>
            <td><a href="{{ route('entradaFinanceiro.edit',$entradaFinanceiro->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('entradaFinanceiro.destroy', $entradaFinanceiro->id)}}" method="post">
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