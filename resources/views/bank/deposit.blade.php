@extends('layouts.app')

@section('content')

<div class="col-md-6 offset-md-3">
    <h1>Depositar</h1>
    <form action="{{route('bank.depositConfirm')}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="MoneyDeposit">Valor a Depositar</label>
        <input type="number" class="form-control" id="MoneyDeposit" name="MoneyDeposit" placeholder="Digite o valor que deseja depositar" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Depositar">
    </form>
</div>

@endsection
