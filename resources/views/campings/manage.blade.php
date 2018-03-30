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
                <tc-managecamping camping="{{ $camping[0] }}"></tc-managecamping>
            </div>
        </div>
    </div>
</div>
@endsection