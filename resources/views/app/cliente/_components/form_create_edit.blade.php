@if(isset($cliente->id))
    <form method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
        <input type="hidden" name="id" value="{{ $clientes->id ?? '' }}">
    </form>
    @method('PUT')
    @csrf
@else
    <form method="post" action="{{ route('cliente.store') }}">
        <input type="hidden" name="id" value="{{ $clientes->id ?? '' }}">
        @csrf
        @endif

        <input type="text" value="{{ $cliente->nome ?? old('nome') }}" name="nome"
               placeholder="Nome" class="borda-preta">
        {{$errors->has('nome') ? $errors->first('nome') : ''}}

        @if(isset($cliente->id))
            <button type="submit" class="borda-preta">Atualizar</button>
        @else
            <button type="submit" class="borda-preta">Cadastrar</button>
        @endif
    </form>
