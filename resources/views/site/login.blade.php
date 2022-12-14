@extends('site.layouts.basico')

@section('titulo', 'contato')

@section('body')

  <div class="conteudo-pagina">

    <div class="titulo-pagina">
      <h1>login</h1>
    </div>

    <div class="informacao-pagina">
      <form action="{{ route('site.login') }}" method="post"> 
        @csrf
        <input name='usuario' type='text' value="{{ old('usuario') }}"placeholder='usuario' class='borda-preta'>
        {{ $errors->has('usuario') ? $errors->first('usuario') : ''}}
        <input name='senha' type='password' value="{{ old('senha') }}"placeholder='senha' class='borda-preta'>
        {{ $errors->has('senha') ? $errors->first('senha') : ''}}
        <button type='submit' class='borsa-preta'>acessar</button>
    </form>
    {{ isset($erro) && $erro != '' ? $erro : ''}}
    </div> 

  </div>

  <div class="rodape">
    <div class="redes-sociais">
      <h2>Redes sociais</h2>
      <img src="{{ asset('img/facebook.png') }}">
      <i'mg src="{{ asset('img/linkedin.png') }}">
      <img src="{{ asset('img/youtube.png') }}">
    </div>
    <div class="area-contato">
      <h2>Contato</h2>
      <span>(11) 3333-4444</span>
      <br>
      <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
      <h2>Localização</h2>
      <img src="{{ asset('img/mapa.png') }}">
    </div>
  </div>
@endsection