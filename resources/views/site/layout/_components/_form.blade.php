{{ $slot }}
<form action="{{route('site.contato')}}" method="post">
    @csrf
    <input name="name" value="{{old('name')}}" type="text" placeholder="Nome" class="{{ $class }}">
    <br>
    <input name="phone" value="{{old('phone')}}" type="text" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{ $class }}">
    <br>
    <select name="reason_contact" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach($reason_contacts as $key => $reason_contact)
            <option value="{{$key}}" {{ old('reason_contact') == $key ? 'selected' : ''}}>{{$reason_contact}}</option>
            @endforeach

    </select>
    <br>
    <textarea name="message" class="{{ $class }}">{{ (old('message')!= '') ? old('message') : 'Preencha sua mensagem aqui'}}</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
