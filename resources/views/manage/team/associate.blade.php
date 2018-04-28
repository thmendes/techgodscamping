@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Associar Campistas</h2>
                        <div class="clearfix"></div>
                    </div>
                    <br />
                    <tc-associate camping="{{ $camping[0]['id'] }}"></tc-associate>                        
                </div>
            </div>
        </div>
    </div>
@endsection