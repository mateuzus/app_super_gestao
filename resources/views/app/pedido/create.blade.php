@extends('app.layouts.basico')

@section('titulo', 'Pedido')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar novo pedido</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                @component('app.pedido._components.form_create_edit', ['clientes' => $clientes])
                @endcomponent
            </div>
        </div>
    </div>

@endsection
