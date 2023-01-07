@extends('layouts.app')

@section('content')
<form action="{{route('bank.reportPost')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="row col-md-12">

        <div class="form-group col-md-12">
            <label for="periodoInscricaoInicio" class="col-form-label">Período</label>
            <div class="input-group">
                <span class="input-group-text">De</span>
                <input name="de_data" type="date" class="datepicker form-control" id="de_data"/>
                <span class="input-group-text">a</span>
                <input name="a_data" type="date" class="datepicker form-control" id="a_data" />
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Pesquisar&nbsp;&nbsp;<i class="fas fa-search"></i></button>
        </div>
    </div>
</form>

@foreach($log as $logs)

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">O que foi feito</th>
        <th scope="col">Data da ação</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $logs->id }}</th>
        <td>{{ $logs->action }}</td>
        <td>{{date('d/m/Y', strtotime( $logs->date)) }}</td>
        <td>R${{ $logs->value }}</td>
      </tr>
    </tbody>
  </table>


@endforeach


@endsection
