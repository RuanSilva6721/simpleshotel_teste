@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">
    <h1>Editando: {{$car->modelCar}}</h1>
    <form action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="modelCar">Modelo</label>
        <input type="text" class="form-control" id="modelCar" name="modelCar" placeholder="Modelo do Carro" required value="{{$car->modelCar}}">
    </div>
    <div class="form-group">
        <label for="brandCar">Marca</label>
        <input type="text" class="form-control" id="brandCar" name="brandCar" placeholder="Marca do Carro" required value="{{$car->brandCar}}">
    </div>
    <div class="form-group">
        <label for="version">Versão</label>
        <input type="number" class="form-control" id="version" name="version" placeholder="Versão do Carro" required value="{{$car->version}}">
    </div>
    <div class="form-group">
        <label for="description">descrição</label>
        <textarea name="description" id="description" class="form-control" placeholder="Descrição do carro" rows="10">{{$car->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="title">Adicione itens ao carro</label>
        <div class="form-group">
            <label for="title">Adicione itens ao carro</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Vidros e travas elétricas"> Vidros e travas elétricas
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Ar-condicionado"> Ar-condicionado
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Bancos de couro"> Bancos de couro
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Pintura"> Pintura
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Pacote de espelhos"> Pacote de espelhos
            </div>
        </div>
    <input type="submit" class="btn btn-primary" value="Atualizar Carro">
    </form>
</div>
@endsection
