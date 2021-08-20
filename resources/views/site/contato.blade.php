@extends('site.layout.app')

@section('title', $title)
@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">

                @component('site.layout._components._form', ['class'=>'borda-preta', 'motivo_contatos' => $motivo_contatos])
                    <p>Nossa equipe analisará a sua mensagem e retornaremos o mais breve possível!</p>
                    <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent
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
        $(document).ready(function (){
            $('.phone').mask('(00) 00000-0000');
        })
    </script>

@endsection
