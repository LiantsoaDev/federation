@extends('admin.layouts.app')

@section('style')
@include('admin.style')
@endsection

@section('content')

<!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <div class="row">
                            <div class="col-lg-9">
                            	<!-- Message Notification -->
		                    	@include('admin.notification')
		                    	<!-- End Notification -->
                                <div class="panel">
                                    <div class="btn-toolbar pad-all">
                                    	<blockquote>
                                            <h4> Les Membres et l'hiérarchie de la fédération Malagasy de basket-ball</h4>
	                                        <div class="btn-group">
	                                            <button class="btn btn-sm btn-default" type="button">
	                                            <i class="fa fa-mail-reply"></i>
	                                            </button>
	                                        </div>
	                                        <div class="btn-group">
	                                            <button class="btn btn-sm btn-default" type="button">
	                                            <i class="fa fa-refresh"></i>
	                                            </button>
	                                        </div>	
                                        </blockquote>
                                    </div>
                                    <div class="panel-body">
                                        <div class="mail-list">
                                        	<div class="text-center">
                                            	<img src="{{$image}}" class="rounded" alt="..." width="650" height="550">
                                            </div>
                                            <div class="mail-sender">
                                            	<blockquote>
                                                    <h4> Organigramme et Structure officiel de la fédération Malagasy de basket-ball</h4>
                                                    <small>Schéma répresentant l' <cite title="Source Title">{{$organigramme->titre}}</cite></small> 
                                                </blockquote>
                                                
                                                <div class="media">
                                                    <a href="#" class="pull-left"> <img alt="" src="{{asset('assets/images/profils/av1.png')}}" class="media-object"> </a> <span class="media-meta pull-right">
                                                    	<button class="btn btn-default btn-icon icon-lg fa fa-edit" id="show"></button>
                                                    	<button class="btn btn-default btn-icon icon-lg fa fa-times" id="back"></button>
                                                    </span>
                                                    <h5>
                                                        {{ucfirst($user->name)}}
                                                    </h5>
                                                    <small class="text-muted">From: {{$user->email}}</small> 
                                                </div>
                                            </div>
                                             <div class="attachment-mail">
                                                <ul>
                                                    <li>
                                                        <a class="atch-thumb" href="#"> <img src="{{ (!empty($datas->image))? asset('images/membres/'.$datas->image) : asset('images/img-default.png') }}" alt=""> </a>
                                                        <p> IMAGE </p>
                                                    </li>
                                                </ul>
                                             </div>
                                            <div class="view-mail" id="description">
                                                <h4>Un mot du Président : </h4>
                                                @if( empty($datas->paragraphe) )
                                                <p>Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac.</p>
                                                <p>Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. </p>
                                                @else
                                                {{ $datas->paragraphe}}
                                                @endif
                                            </div>
                                            <div class="mail-comment">
                                                <a href="#" class="pull-left"></a>
                                                <div class="pull-left col-md-11 no-padding" style="display: none" id="hide">
                                                	<h4>Un mot du Président : </h4>
													<form method="POST" action="{{$action}}" enctype="multipart/form-data">  
													{{csrf_field()}}
													<input type="hidden" name="id" value="{{ (!empty($datas->id))? $datas->id : null }}">
                                                    <textarea class="form-control" cols="12" rows="8" name="paragraphe">
                                                    	{{(!empty($datas->paragraphe)? $datas->paragraphe : null)}}
                                                    </textarea>
                                                    <hr>
                                                    <input class="form-group" type="file" name="file">
                                                    <hr>
                                                    <button class="btn btn-primary btn-labeled fa fa-save">Sauvegarder</button>
                                                    <button type="reset" class="btn btn-primary btn-labeled fa fa-undo" id="back">Annuler</button>
													</form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End page content-->

@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#show").click(function(){
        $("#hide").show();
        $("#description").hide();
    });
    $("#back").click(function(){
        $("#hide").hide();
        $("#description").show();
    });
});
</script>
@endsection