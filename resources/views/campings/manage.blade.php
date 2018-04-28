@extends('layouts.blank') @push('stylesheets') @endpush @section('main_container')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> {{ $camping[0]['name'] }}
                    <small>Gerenciamento</small>
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{ URL::to('/acampamento/' . $camping[0]->id . '/gerenciar/equipe/cadastrar') }}">
                            <div class="tile-stats">
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="count">{{ count($team) }}</div>
                                <h3>Nova Equipe</h3>
                                <p>Crie equipes e selecione os anjos</p>
                            </div>
                        </a>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="{{ URL::to('/acampamento/' . $camping[0]->id . '/gerenciar/campista/associar') }}">
                            <div class="tile-stats">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="count">13</div>
                                <h3>Novo Campista</h3>
                                <p><i class="fa fa-female"></i> 10 <i class="fa fa-male"></i> 3</p>
                            </div>
                        </a>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#"> 
                            <div class="tile-stats">
                                <div class="icon">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <div class="count">1</div>
                                <h3>Lorem</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </a>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="tile-stats">
                                <div class="icon">
                                    <i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">1</div>
                                <h3>Lorem</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <tc-managecamping camping="{{ $camping[0] }}"></tc-managecamping>
            </div>
        </div>
    </div>
</div>
@endsection