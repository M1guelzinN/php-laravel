@extends('app.layouts.basico')

@section('titulo', 'fornecedores')

@section('body')
  <div class="titulo-pagina2">
      <h1>fornecedores - listar</h1>
  </div>

  <div class="menu">
    <ul>
        <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
        <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
    </ul>
  </div>

  <div class='informacao-pagina'>
    <div  style="width: 30%; margin: auto;">
    <table  border="1" width="100%">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Site</th>
          <th>UF</th>
          <th>Email</th>
        </tr>
    </thead>
      <tbody>
    @foreach ($fornecedores as $i )
        <tr>
          <td> {{ $i->nome}} </td>
          <td> {{ $i->site}} </td>
          <td> {{ $i->uf}} </td>
          <td> {{ $i->email}}</td>
          <td> <a href="{{ route('app.fornecedor.excluir', $i->id) }}">Excluir</a></td>
          <td> <a href="{{ route('app.fornecedor.editar', $i->id) }}">Editar</a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    <br>
   <div> {{ $fornecedores->appends($request)->links() }}  </div>
   <br>
   <div> {{ $fornecedores->count() }} - registros de fornecedores do total de {{ $fornecedores->total() }}</div>
  </div>
@endsection