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
                        <h2>Cadastro<small>Voluntário</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    	<form id="modality" action="cadastrar" method="POST" class="form-horizontal form-label-left">
    	                  	{{ csrf_field() }}
                            <tc-createvolunteer></tc-createvolunteer>
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