@extends('app.layouts.basico')

@section('titulo', 'Detalhes do Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Editar Detalhes do Produto</p>
        </div>

        <div class="menu">
            <li><a href="#">Voltar</a></li>

        </div>

        <div class="informacao-pagina">
            <h4>Produto</h4>
            <div>Nome: {{ $produto_detalhe->item->nome }}</div>
            <br>
            <div>Descrição: {{ $produto_detalhe->item->descricao }}</div>
            <br>
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                @component('app.produto_detalhe._components._form', ['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
