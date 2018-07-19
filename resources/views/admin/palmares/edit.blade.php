@extends('admin.layouts.app')

@section('content')

<section id="page-content">
	<div class="row">
		<div class="col-lg-8">
			<div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Tableau de contrôle</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--Buttons with label-->
                                        <!--===================================================-->
                                        <a href="javascript:history.back()" class="btn btn-primary btn-labeled fa fa-undo">Précédent</a>
                                        <a href="{{route('admin.palmares.show')}}" class="btn btn-default btn-labeled fa fa-home pull-left">Menu principal</a>
                                        <!--===================================================-->
                                    </div>
                                    @include('admin.notification')
                                </div>
			<div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Formulaire de modification</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" method="POST" action="{{$action}}">
                                        {{csrf_field()}}
                                        <!--Text Input-->
                                        <input type="hidden" name="id" value="{{$palmares->id}}">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Nom du Palmarès</label>
                                            <div class="col-md-6">
                                                <textarea type="text" id="demo-text-input" class="form-control" name="prix">{{$palmares->prix}}</textarea>
                                                @if( $errors->has('prix'))
                                                <small class="help-block" style="color:red"> Erreur : {{$errors->first('prix')}}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <!--Email Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-email-input">Date</label>
                                            <div class="col-md-6">
                                                <div class="input-group date">
						                          <input type="text" id="datepicker" class="form-control" name="date" value="{{ date('d-m-Y',strtotime($palmares->date)) }}" autocomplete="off">
						                          <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
						                      </div>
                                              @if( $errors->has('date'))
                                                <small class="help-block" style="color:red"> Erreur : {{$errors->first('date')}}</small>
                                                @endif
                                            </div>
                                        </div>
                                         <button class="btn btn-primary btn-labeled fa fa-save">Sauvegarder</button>
                                        <a href="{{route('admin.palmares.show')}}" class="btn btn-default btn-labeled fa fa-undo pull-right">Annuler</a>
                                    </form>
		</div>
		
	</div>
</section>

@endsection