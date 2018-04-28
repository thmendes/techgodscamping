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
                        <h2>Últimos cadastrados<small>Pessoas</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                          <thead>
                            <tr>  
                              <th>Nome</th>
                              <th>E-mail</th>
                              <th>Telefone</th>
                              <th>Camiseta</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if(count($people))
                                @foreach($people as $person)
                                <tr>
                                    <td>{{ $person['name'] }}</td>
                                    <td>{{ $person['email'] }}</td>
                                    @if(empty($person['phone']))
                                        <td>{{ $person['parent_phone'] }}</td>
                                    @else
                                        <td>{{ $person['phone'] }}</td>
                                    @endif
                                    <td>{{ $person['shirt'] }}</td>
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