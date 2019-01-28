@extends('layouts.extern-blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Campista</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        Obrigado por se inscrever, {{ $person }}
                    </div>
                    <div class="x_content">
                        <a href="{{ url('/') }}">
                            <button class="btn btn-success">Voltar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection