
@extends('layouts.layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jogos-index') }}">Jogos Criados</a>
          </li>
      </div>
    </div>
  </nav>
    <div class="container">
        <h1 style="text-align: center">Crie um novo jogo</h1>
        <br>
        <form action="{{route('jogos-store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" placeholder="Digite um nome" class="form-control">
                </div>
                <br>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria:</label>
                    <input type="text" name="categoria" placeholder="Categoria do jogo" class="form-control" >
                </div>
                <br>
                <div class="mb-3">
                    <label for="ano_criacao" class="form-label">Ano de criação:</label>
                    <input type="number" name="ano_criacao" placeholder="Digite o ano" class="form-control">
                </div>
                <br>
                <div class="mb-3">
                    <label for="valor" class="form-label">Valor:</label>
                    <input type="number" name="valor" placeholder="Valor na steam" step="0.001" class="form-control">
                </div>
                <br>
                <div class="col align-self-end">
                    <input type="submit" name="submit" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
@endsection
