@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">
    <h1>Editando: {{$user->name}}</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="modelCar">Modelo</label>
        <input type="text" class="form-control" id="modelCar" name="modelCar" placeholder="Modelo do Carro" required value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label for="brandCar">Marca</label>
        <input type="text" class="form-control" id="brandCar" name="brandCar" placeholder="Marca do Carro" required value="{{$user->password}}">
    </div>


    <input type="submit" class="btn btn-primary" value="Atualizar Carro">
    </form>
</div>
@endsection
