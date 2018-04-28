@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Equipe</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <br />
                    <form id="team" action="cadastrar" method="POST" class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Cor</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="color">
                                    <option value="0">Selecione</option>
                                    @foreach($colors as $color)
                                        <option value="{{ $color['id'] }}">{{ ucfirst($color['name']) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="campingName">Acampamento</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="campingName" name="campingName" disabled value="{{ $camping[0]['name'] }}" class="form-control col-md-7 col-xs-12">
                                <input type="hidden" id="camping" name="camping" value=" {{ $camping[0]['id'] }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="description">Descrição</label>
                            <div class="col-md-6 col-sm-3 col-xs-12">
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        @for ($index = 1; $index <= $camping[0]['angels']; $index++)
                                <tc-searchvolunteer value="{{'angelValue' .$index}}" name="{{ 'angel' . $index }}"></tc-searchvolunteer>
                        @endfor
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