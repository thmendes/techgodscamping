@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Cores</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="color" action="/cores/cadastrar" method="POST" class="form-horizontal form-label-left">
		                  	{{ csrf_field() }}
                            <div class="form-group">
	           					<label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome</label>
	                        	<div class="col-md-6 col-sm-6 col-xs-12">
		                        	<input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
	                        	</div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-3 col-xs-12 col-md-offset-2">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                            @include('layouts.error')
                        </form>
                    </div>
                    <div class="x_title">
                        <h2>Últimos cadastrados<small>Cores</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                          <thead>
                            <tr>  
                              <th>Nome</th>
                              <th>Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if(count($colors))
                                @foreach($colors as $color)
                                <tr>
                                    <td>{{ ucfirst($color['name']) }}</td>
                                    <td></td>
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