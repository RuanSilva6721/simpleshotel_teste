@extends('layouts.app')

@section('content')

<div class="col-md-6 offset-md-3">
    <h1>Sacar</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="modelCar">Modelo</label>
        <input type="text" class="form-control" id="modelCar" name="modelCar" placeholder="Modelo do Carro" required>
    </div>
    <div class="form-group">
        <label for="brandCar">Marca</label>
        <input type="text" class="form-control" id="brandCar" name="brandCar" placeholder="Marca do Carro" required>
    </div>

    <input type="submit" class="btn btn-primary" value="Adicionar Carro">
    </form>
</div>


@endsection
