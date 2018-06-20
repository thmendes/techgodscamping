@extends('layouts.blank') @push('stylesheets') @endpush @section('main_container')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cadastro
                        <small>Álbum</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <a href="/meuacampamento">
                        <button type="button" class="btn btn-info">Voltar</button>
                    </a>
                    <a href="/institucional/galeria/nova">
                        <button type="button" class="btn btn-success">Criar Novo Álbum</button>
                    </a>
                </div>
                <div class="x_title">
                    <h2>Galeria</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($albums as $album) 
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                            <img style="width: 100%; height: 100%; display: block;" src="../storage/institutional/album_covers/{{$album->cover}}" alt="image" />
                                                <div class="mask">
                                                    <p>{{ $album->name }}</p>
                                                    <div class="tools tools-bottom">
                                                        <a href="/institucional/galeria/{{ $album->id }}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption" style="height: 60px;">
                                                <center><p>{{ $album->description }}</p></center>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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