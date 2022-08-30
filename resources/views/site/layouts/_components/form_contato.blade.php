<form action="{{ route('site.contato') }}" method="post">
@csrf
  <input name='nome'type="text" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
  <br>
  <input name='telefone'type="text" value="{{ old('telefone') }}" placeholder="Telefone" class="borda-preta">
  <br>
  <input name='email'type="text" value="{{ old('email') }}" placeholder="E-mail" class="borda-preta">
  <br>


  <select name='motivo_contato' class="borda-preta">
    <option >Qual o motivo do contato?</option>

    @foreach ( $motivo_contatos as $key => $motivo_contato)
        <option value="{{ $key }}" {{ old('motivo_contato') == $key ? 'selected' : ''}}> {{ $motivo_contato }}</option>
    @endforeach
  </select>
  <br>
  <textarea name='mensagem' class="borda-preta">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha e campo com sua mensagem' }}</textarea>
  <br>
  <button type="submit" class="borda-preta">ENVIAR</button>
</form>

<pre style='position: absolute; top: 0; left: 0; width: 90%; background: red;'>
{{ print_r( $errors) }}
</pre>


{{ $slot}}
{{ $x}}