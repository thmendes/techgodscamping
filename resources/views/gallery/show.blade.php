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
                    <h2>Alterar</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form style="1px solid #E6E9ED" action="{{$album->id}}/upload" method="POST" enctype="multipart/form-data" class="dropzone">
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="x_title">
                    <h2>Galeria</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($album->photos as $photo) 
                                    <div class="col-md-55">
                                        <div class="thumbnail" style="height:100%;">
                                            <div class="image view view-first">
                                            <img style="width: 100%; height: 100%; display: block;" src="../../storage/institutional/Galeria/{{$album->id}}/{{ $photo->name}}" alt="image" />
                                                <div class="mask">
                                                    <div class="tools tools-bottom">
                                                        <a href="{{$album->id}}/delete/{{$photo->id}}">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <a href="/institucional/galeria/{{$album->id}}/delete"><button type="button" class="btn btn-danger">Excluir Álbum</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection