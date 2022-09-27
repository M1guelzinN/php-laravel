@extends('app.layouts.basico')

@section('titulo', 'fornecedores')

@section('body')
  <div class="titulo-pagina2">
      <h1>fornecedores</h1>
  </div>

  <div class="menu">
      <ul>
          <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
          <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
      </ul>
  </div>

  <div class='informacao-pagina'>
    <div style="width: 50%; margin: auto;">
      <form method='post' action="{{ route('app.fornecedor.listar') }}">
      @csrf
        <input type=text name='nome' placeholder="Nome" value="{{ old('nome') }}" class="borda-preta">
        {{ $errors->has('nome') ? $errors->first('nome') : ''}}

        <input type=text name='site' placeholder="Site" value="{{ old('site') }}" class="borda-preta">
        {{ $errors->has('site') ? $errors->first('site') : ''}}

        <input type=text name='uf' placeholder="UF" value="{{ old('uf') }}" class="borda-preta">
        {{ $errors->has('uf') ? $errors->first('uf') : ''}}

        <input type=text name='email' placeholder="email" value="{{ old('email') }}" class="borda-preta">
        {{ $errors->has('email') ? $errors->first('email') : ''}}

        <button type="submit" class="borda-preta"> Pesquisar </button>
      </form>
    </div>
  </div>
@endsection