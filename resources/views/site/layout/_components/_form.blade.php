{{ $slot }}
<form action="{{route('site.contato')}}" method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="{{ $class }}">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $class }}">
    <br>
    <select name="reason_contact" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="{{ $class }}" placeholder="Preencha sua mensagem aqui"></textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
