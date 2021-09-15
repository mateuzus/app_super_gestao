@extends('app.layouts.basico')

@section('titulo', 'Pedido')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de Pedidos</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('pedido.create') }}">Novo</a></li>
            <li><a href="{{ route('pedido.index') }}">Voltar</a></li>

        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-right: auto; margin-left: auto;">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>ID Pedido</th>
                        <th>Cliente</th>
                        <th></th>
                        <th colspan="3">Ações</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->cliente_id }}</td>
                            <td><a href="{{ route('pedido_produto.create', ['pedido' => $pedido->id]) }}">Adicionar Produtos</a></td>
                            <td><a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Visualizar</a></td>
                            <td><a href="{{ route('pedido.edit', ['pedido' => $pedido]) }}">Editar</a></td>
                            <td>
                                <form id="form_{{$pedido->id}}" method="post"
                                      action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$pedido->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$pedidos->appends($request)->links()}}
                <br>
                Exibindo {{ $pedidos->count() }} pedidos de {{ $pedidos->total() }} (de {{ $pedidos->firstItem() }}
                a {{ $pedidos->lastItem() }})

            </div>
        </div>
    </div>
@endsection
