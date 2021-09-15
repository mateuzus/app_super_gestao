@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar novo cliente</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                @component('app.cliente._components.form_create_edit')
                @endcomponent
            </div>
        </div>
    </div>

@endsection
