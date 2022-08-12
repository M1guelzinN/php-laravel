<h1> Rede de fornecedores </h1>


@isset($fornecedores)
  @for($i = 0; isset($fornecedores[$i]); $i++)
   nome do fornecedor = {{ $fornecedores[$i] ['nome']}}
   <br>
   disponivel = {{ $fornecedores[$i] ['disponivel']}}
   <br> 
   CNPJ do fornecedor = {{ $fornecedores[$i] ['CNPJ'] ?? 'não informado'}}
   <br>
   ddd de =@switch($fornecedores[$i]['telefone']['ddd'])
   @case('11')
    São paulo
    @break
  @case('15')
    Pilar do Sul
    @break
  @case('85')
    Fortaleza
    @break
  @case('13')
    Ilha Comprida
    @break
   @endswitch
   <br>
   telefone de contato = {{ $fornecedores[$i]['telefone']['numero']}}
   <hr>
  @endfor
@endisset








{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
<h2>existem alguns fornecedores</h2>
@elseif(count($fornecedores) > 10)
<h2>existem varios fornecedores</h2>
@else
<h2>ainda não tem fornecedores cadastrados</h2>
@endif --}}


{{-- 
cometario estranho do blade
 --}}
{{-- {{
  print 'codigo php'
}} --}}

@php
// comentario
/*  
isset = verifica se a variavel existe

empty = testa se a variavel está vazias[
  0, '0', '', NULL, false,
Só responde se estiver vazia
]
*/
@endphp