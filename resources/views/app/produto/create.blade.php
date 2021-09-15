@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
                <p>Adicionar novo produto</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('produto.index') }}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                @component('app.produto._components._form', ['unidades' => $unidades, 'fornecedores' => $fornecedores])
                @endcomponent
            </div>
        </div>
    </div>

@endsection
