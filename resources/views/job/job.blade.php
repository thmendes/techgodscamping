@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Funções</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <a href="/funcoes/cadastrar"><button type="button" class="btn btn-success">Cadastrar Nova Função</button></a>
                    </div>
              		<div class="x_title">
                    	<h2>Pesquisa<small>Funções</small></h2>
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
                        <h2>Últimas cadastradas<small>Funções</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                          <thead>
                            <tr>  
                              <th>Nome</th>
                              <th>Descrição</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if(count($jobs))
                                @foreach($jobs as $job)
                                <tr>
                                    <td>{{ $job['name'] }}</td>
                                    <td>{{ $job['description'] }}</td>
                                </tr>   
                                @endforeach
                            @endif
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection