@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de produtos</p>
        </div>

        <div class="menu">
            <li><a href="{{ route('produto.create') }}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-right: auto; margin-left: auto;">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Fornecedor</th>
                        <th>Peso</th>
                        <th>Medida</th>
                        <th>Comprimento</th>
                        <th>Altura</th>
                        <th>Largura</th>
                        <th colspan="3">Ações</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->fornecedor->nome }}</td>
                            <td>{{ $produto->peso }}</td>
                            <td>{{ $produto->unidade_id }}</td>
                            <td>{{ $produto->itemDetalhe->comprimento ?? '' }}</td>
                            <td>{{ $produto->itemDetalhe->altura ?? '' }}</td>
                            <td>{{ $produto->itemDetalhe->largura ?? '' }}</td>
                            <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a></td>
                            <td><a href="{{ route('produto.edit', ['produto' => $produto]) }}">Editar</a></td>
                            <td>
                                <form id="form_{{$produto->id}}" method="post"
                                      action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <p>Pedidos</p>
                                @foreach($produto->pedidos as $pedido)
                                    <a href="{{ route('pedido_produto.create', ['pedido' => $pedido->id]) }}">
                                   Pedido: {{ $pedido->id }},
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$produtos->appends($request)->links()}}
                <br>
                Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de {{ $produtos->firstItem() }}
                a {{ $produtos->lastItem() }})

            </div>
        </div>
    </div>
@endsection
