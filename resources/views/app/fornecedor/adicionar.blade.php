@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar novo</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            {{ $msg }}
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                    @csrf
                    <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    <input type="text" value="{{ old('site') }}" name="site" placeholder="Site" class="borda-preta">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}
                    <input type="text" value="{{ old('uf') }}" name="uf" placeholder="UF" class="borda-preta">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}
                    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
