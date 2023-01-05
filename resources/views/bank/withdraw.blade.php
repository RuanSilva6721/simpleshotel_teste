@extends('layouts.app')

@section('content')

<div class="col-md-6 offset-md-3">
    <h1>Sacar</h1>
    <form action="{{route('bank.withdrawConfirm')}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="MoneyWithdraw">Valor a Sacar</label>
        <input type="number" class="form-control" id="MoneyWithdraw" name="MoneyWithdraw" placeholder="Digite o valor que deseja sacar" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Sacar">
    </form>
</div>


@endsection
