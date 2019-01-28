@extends('layouts.blank')
@push('stylesheets')
@endpush
@section('main_container')
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Pessoa</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <a href="/pessoas/cadastrar"><button type="button" class="btn btn-success">Cadastrar Novo Campista</button></a>
                    </div>
                    <div class="x_title">
                        <h2>Todas as pessoas cadastradas<small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                          <thead>
                            <tr>  
                              <th>Nome</th>
                              <th>E-mail</th>
                              <th>Telefone</th>
                              <th>Camiseta</th>
                              <th>Data Inscrição</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if(count($people))
                                @foreach($people as $person)
                                <tr>
                                    <td>{{ $person['name'] }}</td>
                                    <td>{{ $person['email'] }}</td>
                                    @if(empty($person['phone']))
                                        <td>{{ $person['parent_phone'] }}</td>
                                    @else
                                        <td>{{ $person['phone'] }}</td>
                                    @endif
                                    <td>{{ $person['shirt'] }}</td>
                                    <td>{{ $person['created_at']->toFormattedDateString() }}</td>
                                </tr>   
                                @endforeach
                            @endif
                          </tbody>
                        </table>
                    </div>
                    {{ $people->links() }}
                </div>            
            </div>
        </div>
    </div>    
@endsection