@extends('layouts.blank')

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
                    	<form id="user" action="cadastrar" method="POST" class="form-horizontal form-label-left">
    	                  	{{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">E-mail</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="senha">Senha</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="password" name="password" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="">Confirme a senha</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div> 
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-3 col-xs-12 col-md-offset-2">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                            @include('layouts.error')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection