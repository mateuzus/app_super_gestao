@if(isset($pedido->id))
    <form method="post" action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}">
        <input type="hidden" name="id" value="{{ $pedidos->id ?? '' }}">
    </form>
    @method('PUT')
    @csrf
@else
    <form method="post" action="{{ route('pedido.store') }}">
        <input type="hidden" name="id" value="{{ $pedidos->id ?? '' }}">
        @csrf
        @endif

        <select name="cliente_id">
            <option>Selecione um Cliente</option>

            @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}" {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : ''}}>{{ $cliente->nome }}</option>
            @endforeach
        </select>
        {{$errors->has('cliente_id') ? $errors->first('cliente_id') : ''}}

        @if(isset($pedido->id))
            <button type="submit" class="borda-preta">Atualizar</button>
        @else
            <button type="submit" class="borda-preta">Cadastrar</button>
        @endif
    </form>
