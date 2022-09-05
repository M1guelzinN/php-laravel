<form action="{{ route('site.contato') }}" method="post">
@csrf
  <input name='nome'type="text" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
  @if($errors->has('nome'))
  {{ $errors->first('nome') }}
  @endif
  <br>
  <input name='telefone'type="text" value="{{ old('telefone') }}" placeholder="Telefone" class="borda-preta">
  {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
  <br>
  <input name='email'type="text" value="{{ old('email') }}" placeholder="E-mail" class="borda-preta">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
  <br>


  <select name='motivo_contato' class="borda-preta">
    @foreach ( $motivo_contatos as $key => $motivo_contato)
        <option value="{{ $key }}" {{ old('motivo_contato') == $key ? 'selected' : ''}}> {{ $motivo_contato }}</option>
    @endforeach
  {{ $errors->has('motivo_contato') ? $errors->first('motivo_contato') : '' }}
  </select>
  <br>
  <textarea name='mensagem' class="borda-preta">
    {{ (old('mensagem') != '') ? old('mensagem') : 'Preencha e campo com sua mensagem' }}
  </textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}     
  <br>
  <button type="submit" class="borda-preta">ENVIAR</button>
</form>

{{-- @if( $errors->any())
  <div style='position: absolute; top: 0; left: 0; width: 90%; background: red;'>
    @foreach ($errors->all() as $erro )
      {{  $erro }}
      <br>
    @endforeach
  </div>     
@endif --}}

{{ $slot}}
{{ $x}}