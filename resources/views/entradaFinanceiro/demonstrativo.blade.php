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

  <canvas id="myChart" width="400" height="400"></canvas>
<div>
@endsection

@section('js')
<script>
  $(document).ready( function () {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
  } );
</script>
@endsection