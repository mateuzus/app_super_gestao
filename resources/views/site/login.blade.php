@extends('site.layout.app')

@section('title', $title)
@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
            <form action="{{ route('site.login') }}" method="post">
                @csrf
                <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
                {{$errors->has('usuario') ? $errors->first('usuario') : ''}}

                <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="borda-preta">
                {{ $errors->has('senha') ? $errors->first('senha') : '' }}

                <button type="submit" class="borda-preta">Acessar</button>
            </form>
                <div style="color: red; font-weight: bold">
                {{ isset($erro) && $erro != '' ? $erro : '' }}
                </div>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('/img/facebook.png') }}">
            <img src="{{ asset('/img/linkedin.png') }}">
            <img src="{{ asset('/img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{asset('/img/mapa.png')}}">
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="../../js/dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $('.phone').mask('(00) 00000-0000');
        })
    </script>

@endsection
