@if(isset($produto->id))
    <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
        <input type="hidden" name="id" value="{{ $produtos->id ?? '' }}">
    </form>
    @method('PUT')
    @csrf
@else
    <form method="post" action="{{ route('produto.store') }}">
        <input type="hidden" name="id" value="{{ $produtos->id ?? '' }}">
        @csrf
        @endif
        <input type="text" value="{{ $produto->nome ?? old('nome') }}" name="nome"
               placeholder="Nome" class="borda-preta">
        {{$errors->has('nome') ? $errors->first('nome') : ''}}
        <input type="text" value="{{ $produto->descricao ?? old('descricao') }}"
               name="descricao" placeholder="Descrição"
               class="borda-preta">
        {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
        <input type="text" value="{{ $produto->peso ?? old('peso') }}" name="peso"
               placeholder="Peso" class="borda-preta">
        {{$errors->has('peso') ? $errors->first('peso') : ''}}
        <select name="unidade_id">
            <option>Selecione a unidade de medida</option>
            @foreach($unidades as $unidade)
                <option value="{{ $unidade->id }}" {{ $produto->unidade_id ?? old('unidade_id' == $unidade->id) ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
            @endforeach
        </select>
        {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}

        @if(isset($produto->id))
            <button type="submit" class="borda-preta">Atualizar</button>
        @else
            <button type="submit" class="borda-preta">Cadastrar</button>
        @endif
    </form>
