@extends('layouts.blank') @push('stylesheets') @endpush @section('main_container')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top">
                        <i class="fa fa-user"></i> Campistas</span>
                    <div class="count">2500</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top">
                        <i class="fa fa-female"></i> Feminino</span>
                    <div class="count">4,567</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top">
                        <i class="fa fa-male"></i> Masculino</span>
                    <div class="count">2,315</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top">
                        <i class="fa fa-users"></i> Equipes</span>
                    <div class="count">123.50</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top">
                        <i class="fa fa-user"></i> Voluntários</span>
                    <div class="count green">2,500</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection