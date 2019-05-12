@extends('layouts.blank') @push('stylesheets') @endpush @section('main_container')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Notícias</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <a href="/meuacampamento">
                        <button type="button" class="btn btn-info">Voltar</button>
                    </a>
                </div>
                <div class="x_title">
                    <h2>Jornal</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <form id="journal" action="nova" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="title">Título</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="title">Sub-Título</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="subtitle" name="subtitle" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="body">Corpo</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12 style='min-height:500px;'">
                                            <textarea name="body" id="editor"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="title">Capa</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="file" id="cover" name="cover" class="form-control col-md-7 col-xs-12">
                                            <p>Dica: Tamanho ideal para a capa é 1200x350 pixels.</p>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-3 col-xs-12 col-md-offset-2">
                                            <button type="submit" class="btn btn-success">Publicar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>
</div>
@endsection