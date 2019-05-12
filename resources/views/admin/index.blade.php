@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Pessoa (administrativo)</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <a href="/administrativo/usuario/cadastrar"><button type="button" class="btn btn-success">Cadastrar Novo Usuário</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection