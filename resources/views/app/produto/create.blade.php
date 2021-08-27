@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Adicionar novo</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('produto.index') }}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                <form method="post" action="{{ route('produto.store') }}">
                    <input type="hidden" name="id" value="{{ $produtos->id ?? '' }}">
                    @csrf
                    <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="borda-preta">
                    {{$errors->has('nome') ? $errors->first('nome') : ''}}
                    <input type="text" value="{{ old('descricao') }}" name="descricao" placeholder="Descrição" class="borda-preta">
                    {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
                    <input type="text" value="{{ old('peso') }}" name="peso" placeholder="Peso" class="borda-preta">
                    {{$errors->has('peso') ? $errors->first('peso') : ''}}
                    <select name="unidade_id">
                        <option>Selecione a unidade de medida</option>
                        @foreach($unidades as $unidade)
                            <option value="{{ $unidade->id }}" {{ old('unidade_id' == $unidade->id) ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
                            @endforeach
                    </select>
                    {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
