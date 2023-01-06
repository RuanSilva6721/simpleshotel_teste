@extends('layouts.app')

@section('content')

<div class="col-md-6 offset-md-3">
    <h1>Editando: {{$user->name}}</h1>
    <form action="{{ route('home.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="digite o seu email" required value="{{$user->email}}" Disabled >
    </div>
    <div class="form-group">
        <label for="cpf">Cpf</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="digite o seu cpf" required value="{{$user->cpf}}" Disabled >
    </div>
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="digite o seu nome" required value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Digite a sua senha" required >
    </div>


    <input type="submit" class="btn btn-primary" value="Atualizar Cadastro">
    </form>
</div>
@endsection
