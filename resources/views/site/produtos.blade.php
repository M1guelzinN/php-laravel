@extends('site.layouts.basico')

@section('body')
    <h2>pagina de produtos</h2>
    <header>
      <ul>
        <li><a href="{{ route('site.index') }}">index</a></li>
        <li><a href="{{ route('site.produto') }}">produtos</a></li>
        <li><a href="{{ route('site.contato') }}">contato</a></li>
        <li><a href="{{ route('site.sobrenos') }}">sobre nós</a></li>
      </ul>
    </header>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error omnis aut labore repudiandae, fugiat placeat nemo amet alias distinctio nobis adipisci exercitationem commodi ab eligendi veritatis porro reiciendis reprehenderit nihil!</p>
@endsection
{{-- 
cometario estranho do blade
 --}}

{{-- {{
  print 'codigo php'
}} --}}
@php
// comentario
@endphp