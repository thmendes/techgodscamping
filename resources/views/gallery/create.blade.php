@extends('layouts.blank') @push('stylesheets') @endpush @section('main_container')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                        <a href="/institucional/galeria"><button type="button" class="btn btn-info">Voltar</button></a>
                </div>
                <div class="x_title">
                    <h2>Cadastro
                        <small>Funções</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="gallery"  action="nova" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome</label>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="description">Descrição</label>
                            <div class="col-md-6 col-sm-3 col-xs-12">
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="description">Capa</label>
                            <div class="col-md-6 col-sm-3 col-xs-12">
                                <input type="file" id="cover" name="cover" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-3 col-xs-12 col-md-offset-2">
                                <button type="submit" class="btn btn-success">Criar</button>
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