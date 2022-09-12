<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/estiloBasico.css') }}">
    <title>Super Gestão - @yield('titulo') </title>
  </head>
  <body>
    @include('app.layouts._partials.topo')
    @yield('body')
  </body>
</html>