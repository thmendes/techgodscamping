@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Pessoa</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <a href="/pessoas/cadastrar"><button type="button" class="btn btn-success">Cadastrar Novo Campista</button></a>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                    </div>
              		<div class="x_title">
                    	<h2>Pesquisa<small>Pessoa</small></h2>
                    	<div class="clearfix"></div>
                  	</div>
                  	<div class="x_content">
                    <br />
                    	<form id="pesquisa" data-parsley-validate class="form-horizontal form-label-left">
		                  	<div class="form-group">
	           					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome</label>
	                        	<div class="col-md-6 col-sm-6 col-xs-12">
		                        	<input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
	                        	</div>
		                  	</div>
		                  	<div class="form-group">
	           					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="documet">Documento</label>
	                        	<div class="col-md-2 col-sm-6 col-xs-12">
		                        	<input type="text" id="documet" name="documet" class="form-control col-md-7 col-xs-12">
	                        	</div>
		                  	</div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					                          <button class="btn btn-primary" type="reset">Limpar Filtros</button>
                                    <button type="submit" class="btn btn-success">Pesquisar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="x_title">
                    <h2>Últimos cadastrados<small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <tc-person v-bind:people="{{$retorno['people']}}"></tc-person>
                </div>
                @if ($retorno['number'] > 10)
                    <div class="x_content">
                        <a href="/pessoas/todas"><button type="button" class="btn btn-success">Mostrar todos</button></a>
                    </div>                                                       
                @endif
                <div class="x_content">
                    Total de pessoas cadastradas: {{ $retorno['number'] }} 
                </div>
                <div class="x_content">
                    <a href="/pessoas/exportar"><button type="button" class="btn btn-success">Exportar para Excel</button></a>
                </div>
            </div>
        </div>
    </div>    
@endsection