@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                Chegou o disco voador
            </div>
        </div>
    </div>
@endsection
