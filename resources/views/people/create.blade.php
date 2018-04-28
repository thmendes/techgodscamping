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
                    	<form id="modality" action="cadastrar" method="POST" class="form-horizontal form-label-left">
    	                  	{{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="document">Documento</label>
                                <div class="col-md-4 col-sm-6 col-xs-12 left">
                                    <div class="input-group">
                                        <input type="text" name="document" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">E-mail</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="phone">Telefone</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="phone" name="phone" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="born">Data Nascimento</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="date" id="born" name="born" value="2001-01-01" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="street">Endereço</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="street" name="street" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="city">Cidade</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="city" name="city" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="province">Estado</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="province" name="province" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="parent">Responsável</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="parent" name="parent" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="parent_phone">Responsável - Telefone</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="parent_phone" name="parent_phone" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="medicine">Medicamentos</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="medicine" name="medicine" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="shirt">Camiseta</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <select class="form-control" name="shirt">
                                        <option value="">Selecione</option>
                                        <option value="PP">PP</option>
                                        <option value="P">P</option>
                                        <option value="M">M</option>
                                        <option value="G">G</option>
                                        <option value="GG">GG</option>
                                        <option value="XG">XG</option>
                                        <option value="XGG">XGG</option>
                                    </select>
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