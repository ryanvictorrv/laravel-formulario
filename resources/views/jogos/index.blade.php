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
          <a class="nav-link active" aria-current="page" href="{{ route('jogos-create') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jogos Criados</a>
        </li>
    </div>
  </div>
</nav>
<div class="container text-center">
  <h1>Listagem de jogos</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
  
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de criação</th>
        <th scope="col">Valor</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($jogos as $jogo)
    <br>
      <tr>
        {{-- <th>{{$jogo->id}}</th> --}}
        <td>{{$jogo->nome}}</td>
        <td>{{$jogo->categoria}}</td>
        <td>{{$jogo->ano_criacao}}</td>
        <td>{{$jogo->valor}}</td>
        <th>
        <button class="btn btn-dark">
          <a href="{{ route('jogos-edit', ['id'=>$jogo->id]) }}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
            </svg>
          </a>
        </button>
        </th>
        <th>
          <form action="{{ route('jogos-delete', ['id'=>$jogo->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
              </svg>
            </button>
          </form>
        </th>
      </tr>
    @endforeach
  
    </tbody>
  
  </table>
  <button class="btn btn-secondary"><a href="{{ route('jogos-create') }}" class="nav-link">Novo Jogo</a></button>
</div>
@endsection