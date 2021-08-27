@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Detalhes do produto</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('produto.index') }}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
            <table border="1" style="text-align: left">
                <tr>
                    <td>ID:</td>
                    <td>{{ $produto->id }}</td>
                </tr>

                <tr>
                    <td>Nome:</td>
                    <td>{{ $produto->nome }}</td>
                </tr>

                <tr>
                    <td>Descrição:</td>
                    <td>{{ $produto->descricao }}</td>
                </tr>

                <tr>
                    <td>Peso:</td>
                    <td>{{ $produto->peso }} KG</td>
                </tr>

                <tr>
                    <td>Unidade:</td>
                    <td>{{ $produto->unidade_id }}</td>
                </tr>
            </table>
            </div>
        </div>
    </div>
@endsection
