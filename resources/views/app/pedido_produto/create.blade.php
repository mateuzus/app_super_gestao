@extends('app.layouts.basico')

@section('titulo', 'Pedido Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar Produtos ao Pedido</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <h4>Detalhes do pedido</h4>
            <p>ID do pedido: {{ $pedido->id }}</p>
            <p>Cliente: {{ $pedido->cliente_id }}</p>
            <div style="width: 30%; margin-right: auto; margin-left: auto;">
                <h4>Itens do pedido</h4>
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do produto</th>
                        <th>Data de inclusão do item no pedido </th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pedido->produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{$produto->pivot->created_at->format('d/m/Y')}}</td>
                            <td>
                                <form id="form_{{$pedido->id}}_{{$produto->id}}" method="post" action="{{ route('pedido_produto.destroy', ['pedido' => $pedido, 'produto' => $produto]) }}">
                                @method('DELETE')
                                @csrf
                                <a href="#" onclick="document.getElementById('form_{{$pedido->id}}_{{$produto->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @component('app.pedido_produto._components.form_create', ['pedido' => $pedido, 'produtos' => $produtos])
                @endcomponent
            </div>
        </div>
    </div>

@endsection
