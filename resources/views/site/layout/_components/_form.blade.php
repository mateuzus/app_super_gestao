{{ $slot }}
<form action="{{route('site.contato')}}" method="post">
    @csrf
    <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="{{ $class }}">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="{{ $class }}">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{ $class }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    <select name="motivo_contatos_id" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('$motivo_contato') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach
    </select>
    {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    <br>
    <textarea name="mensagem" class="{{ $class }}">{{ (old('mensagem')!= '') ? old('mensagem') : 'Preencha sua mensagem aqui'}}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>

@if($errors->any())
    <div style="position: absolute; top: 0px; left: 0px; width: 100%; background-color: #9F9FA0">
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
    @endif
