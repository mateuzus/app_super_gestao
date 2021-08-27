@extends('app.layouts.basico')

@section('titulo', 'Produto de Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar Detalhes do Produto</p>
        </div>

        <div class="menu">
            <li><a href="">Voltar</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                @component('app.produto_detalhe._components._form', ['unidades' => $unidades])
                @endcomponent
            </div>
        </div>
    </div>

@endsection

