@extends('admin.layouts.app')

@section('content')


@include('admin.style')
<section id="page-content">
	<div class="row">
                            <div class="col-sm-8">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Listes des entraineurs membres de la WABC</h3>
                                    </div>
                                    <!-- Striped Table -->
                                    <!--===================================================-->
                                    <div class="panel-body">
									@if(!array_is_empty($datas))
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nom et prénom</th>
                                                        <th>Fédération d'affilation</th>
                                                        <th>Contrôle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($datas as $key => $str)
                                                    <tr>
                                                    	<td>{{$str->id}}</td>
                                                        <td>{{$str->nom}}</td>
                                                        <td>{{$str->federation}}</td>
                                                        @if(!empty($str))
                                                        <td>
                                                        <button class="btn btn-mint btn-icon icon-lg fa fa-pencil" data-toggle="modal" data-target="#update{{$str->id}}"></button>
														@include('admin.community.edit')
                                                        <button class="btn btn-danger btn-icon icon-lg fa fa-times" data-toggle="modal" data-target="#delete{{$str->id}}"></button>
                                                        @include('admin.community.delete')
                                                        </td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
										@else
											@if( $errors->any() )
												<div class="alert alert-danger" role="alert">
													@if( $errors->first('nom'))
		                                            <strong>Avertissement!</strong> {{ $errors->first('nom') }}
		                                            @elseif( $errors->first('federation') )
		                                            <strong>Avertissement ! </strong> {{ $errors->first('federation') }}
		                                            @endif
		                                        </div>
											@endif
										 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <!-- Warning Alert layout example -->
                                        <div class="alert alert-dark media fade in">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                            <div class="media-left">
                                                <span class="icon-wrap icon-wrap-xs alert-icon">
                                                <i class="fa fa-bolt fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="alert-title">Attention</h4>
                                                <p class="alert-message">Aucun donnée a été retrouvé pour cette section</p>
                                            </div>
                                        </div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
										@endif
                                    </div>
                                    <!--===================================================-->
                                    <!-- End Striped Table -->
                                </div>
                            </div>
                            <div class="col-md-4">
						        <!-- message de notification -->
						        @include('admin.notification')
						        <!-- fin message de notification -->
						        <div class="panel">
						            <div class="panel-heading">
						                <h3 class="panel-title">Ajouter un membre de la WABC </h3>
						            </div>
						            <div class="panel-body">
						            <!--Dismissible popover-->
						            <a href="#" class="btn btn-primary btn-labeled fa fa-plus add-popover" data-original-title="Membre WABC" data-content="Ajouter un Membre" data-placement="top" data-trigger="focus" data-toggle="modal" data-target="#create">Ajouter Membre</a>
						            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						            @include('admin.community.create')
						            </div>
						        </div>
						    </div>
                        </div>
</section>

@endsection