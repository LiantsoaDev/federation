@extends('admin.layouts.app')

@section('content')

<section id="page-content">
  <div class="row">
    <div class="col-lg-6">

      <!-- notification message -->
      @include('admin.notification')

      <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Modifier un partenaire</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" method="POST" action="{{$action}}" enctype="multipart/form-data"> 
                                    	{{ csrf_field() }}
                                    	<!-- input -->
                                    	<input type="hidden" name="id" value="{{$getValue->id}}">
                                        <!--Titre-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Nom de l'entité / Entreprise</label>
                                            <div class="col-md-9">
                                                <input type="text" id="demo-text-input" class="form-control" name="titre" value="{{ (empty($getValue->titre)? null : $getValue->titre) }}">
                                            </div>
                                        </div>
                                        <!--Description-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-email-input">Description de l'Entité / Entreprise</label>
                                            <div class="col-md-9">
                                                <textarea type="text" id="demo-text-input" class="form-control" cols="5" rows="5" name="description">{{ (empty($getValue->description)? null : $getValue->description) }}</textarea>
                                            </div>
                                        </div>
                                        <!--Option-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-password-input">Option</label>
                                            <div class="checkbox">
							                    <!-- Inline Icon Checkboxes -->
							                    <label class="form-checkbox form-icon active">
							                   	@if( $getValue->option == 0)
							                    <input type="checkbox" name="option" checked=""> Afficher </label>
							                    @else
							                    <input type="checkbox" name="option"> Afficher </label>
							                    @endif
							                </div>
                                        </div>
                                        <hr>
                                        <!--get Image/Icône-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-readonly-input">Logo / Icône</label>
                                            <div class="col-md-4">
											    <div class="thumbnail">
											        <img src="{{asset('/images/partners/'.$getValue->icone)}}" alt="Nature" style="width:100%">
											    </div>
											  </div>
                                        </div>
                                        <hr>
                                        <!--Upload file-->
                                        <div class="form-group">
						                 <label class="col-md-3 control-label"><span class="fa fa-image"></span> &nbsp;Icône ou logo du partenaire</label>
						                 <div class="col-md-9">
						                 	<input type="file" class="form-control" id="psw" name="file">
						                 	<small><code>Information : </code> La taille du logo ou icône page doit être au moins de <code>600x600px</code> et le fichier doit être un <code>.png ou .jpeg ou .svg ou .jpg</code></small>
						                 </div>
						               </div>
						               <!-- Form Errors -->
						               @if( $errors->any() )
						               <hr>
						               <div class="panel-body">
						               		@foreach( $errors->all() as $erreur )
		                                        <div class="alert alert-danger" role="alert">
		                                            <strong>Oh !</strong> {{$erreur}}.
		                                        </div>
						               		@endforeach
						               	</div>
						               	<hr>
						               @endif
						               <!-- Validation form -->
						               <hr>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <button class="btn btn-default btn-labeled fa fa-save pull-right">Enregistrer</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-info btn-rounded btn-labeled fa fa-times pull-left">Annuler</button>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{route('admin.fmbb.partner')}}" class="btn btn-default btn-rounded btn-labeled fa fa-undo pull-right">Retour</a>
                                            </div>
                                        </div>
                                    </form>
                                    <!--===================================================-->
                                    <!-- END BASIC FORM ELEMENTS -->
                                </div>


     </div>
  </div>
</section>

@endsection