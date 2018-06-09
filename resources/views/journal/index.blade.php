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
                    <a href="/institucional/noticias/nova">
                        <button type="button" class="btn btn-success">Escrever nova notícia</button>
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
                                @foreach($journals as $journal) 
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                            <img style="width: 100%; height: 100%; display: block;" src="../storage/institutional/journal_covers/{{$journal->cover}}" alt="image" />
                                                <div class="mask">
                                                    <p>{{ $journal->title }}</p>
                                                    <div class="tools tools-bottom">
                                                        <a href="/institucional/galeria/">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption" style="height: 60px;">
                                                <p>{{ $journal->subtitle }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
</div>
@endsection