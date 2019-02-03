@extends('layouts.extern-blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('main_container')
    <div class="right_col" style="margin-right:230px;" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Campista</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p>Obrigado por se inscrever, {{ $retorno['person'] }}.</p>
                        <p><h2>Atenção!</h2></p>
                        @if($retorno['number'] > 270)
                            <p>O número de cadastros ultrapassou a quantidade de vagas para este acampamento, seu nome entrará na lista de espera, agradecemos sua compreensão.</p>
                        @else
                            <p>Agora o próximo passo para concluir sua inscrição é efetuar o pagamento na secretaria paroquial.</p>
                            <p>Lá você também irá receber as orientações do campista.</p>
                            <p>As paróquias que podem receber o pagamento, são:</p>
                            <ul>
                                <li>Douradina</li>
                                <li>Icaraíma</li>
                                <li>Ivaté</li>
                            </ul> 
                            <p>O pagamento deverá ser realizado até o dia 15 de fevereiro de 2019.</p>
                            <p>Para mais informações entrar em contato nos telefones:</p>
                            <ul>
                                <li>Willians: 44 - 98803-8305</li>
                                <li>Carlos: 44 - 99945-7172</li>
                            </ul>
                        @endif
                    </div>
                    <div class="x_content">
                        <a href="{{ url('/') }}">
                            <button class="btn btn-success">Entendi!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection