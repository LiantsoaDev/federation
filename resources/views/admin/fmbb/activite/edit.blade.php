@include('admin.header-match')

<section id="page-content">
	<div class="row">
        <div class="col-lg-8">
		<!-- Message de notification -->
            @include('admin.notification')
            <!-- End Notification -->
            <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Date et contenu du programme d'activité </h3>
                                    </div>
                                    <form method="POST" action="{{$action}}">
                                        {{csrf_field()}}
                                        
                                    @if( !empty($data->idactivite) )
                                        <input type="hidden" name="id" value="{{$data->idactivite}}">
                                    @endif

                                    <div class="panel-body">
                                        <p>Le programme d'activité que vous allez insérer s'appliquera pendant l'année en cours. Ex: 2017-2018</p>
                                        <br>

                                       <div class="carousel slide" id="c-slide-2" data-ride="carousel">
                                           <div class="carousel-inner">
                                               <div class="item active">
                                                   <div class="eq-height">
                                                       <div class="form-group">
                                                         <div class="col-lg-4">
                                                         <label for="psw"><span class="fa fa-list-ol"></span> Saison : </label>
                                                           <select class="form-control" name="saison">

                                                            @if( !empty($saison))
                                                                <option value="{{$saison}}">{{$saison}}</option>
                                                            @else
                                                                
                                                                <option value="{{ \Carbon\Carbon::now()->year }}-{{ \Carbon\Carbon::now()->addYear()->year }}">{{ \Carbon\Carbon::now()->year }}-{{ \Carbon\Carbon::now()->addYear()->year }}</option>

                                                                 <option value="{{ \Carbon\Carbon::now()->subYear()->year }}-{{ \Carbon\Carbon::now()->year }}">{{ \Carbon\Carbon::now()->subYear()->year }}-{{ \Carbon\Carbon::now()->year }}</option>

                                                                 <option value="{{ \Carbon\Carbon::now()->subYear(2)->year }}-{{ \Carbon\Carbon::now()->subYear(1)->year }}">{{ \Carbon\Carbon::now()->subYear(2)->year }}-{{ \Carbon\Carbon::now()->subYear(1)->year }}</option>
                                                            
                                                            @endif

                                                           </select>
                                                        </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>   

                                       <br>
                                        <p class="text-thin mar-btm">Date du programme d'activité</p>
                                        <!--Bootstrap Datepicker : Range-->
                                        <!--===================================================-->
                                        <div id="demo-dp-range">
                                            <div class="input-daterange input-group" id="datepicker">
                                                <input type="text" class="form-control" name="start" autocomplete="off" {{ (empty($data->debut)? null : 'value='.date('d-m-Y',strtotime($data->debut)).'' ) }} />
                                                <span class="input-group-addon">au</span>
                                                <input type="text" class="form-control" name="end" autocomplete="off" {{ (empty($data->fin)? null : 'value='.date('d-m-Y',strtotime($data->fin)).'' ) }} />
                                            </div>
                                        </div>
                                        @if( $errors->has('start') || $errors->has('end') )
                                            <div class="panel-body">
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Oh Non !</strong> Date obligatoire
                                                </div>
                                            </div>
                                            @endif
                                        <!--===================================================-->
                                        <br>
                                        <hr>
                                        <!--Bootstrap Datepicker : Inline-->
                                        <!--===================================================-->
                                        
		                                    <div class="panel-heading">
		                                        <div class="panel-control">
		                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
		                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
		                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
		                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
		                                        </div>
		                                        <h3 class="panel-title"><span class="fa fa-pencil"></span> Contenu du programme</h3>
		                                    </div>
		                                    <div class="panel-body">
		                                        <!--Summernote-->
		                                        <!--===================================================-->
		                                        <textarea class="form-control" rows="5" cols="10" name="contenu">{{ (empty($data->contenu)? null : $data->contenu) }}</textarea>
		                                        <!--===================================================-->
		                                        <!-- End Summernote -->
		                                    </div>
                                           
                                            @if( $errors->has('contenu') )
                                            <div class="panel-body">
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Oh Non !</strong> {{ $errors->first('contenu') }}
                                                </div>
                                            </div>
                                            @endif
	                                
                                        <!--===================================================-->

                                         <div class="panel-heading">
                                                <div class="panel-control">
                                                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                                </div>
                                                <h3 class="panel-title"><span class="fa fa-map-marker"></span> Lieu de la compétition</h3>
                                            </div>
                                            <div class="panel-body">
                                                <!--Summernote-->
                                                <!--===================================================-->
                                                <textarea class="form-control" rows="3" cols="10" name="lieu">{{ (empty($data->lieu)? null : $data->lieu) }}</textarea>
                                                <!--===================================================-->
                                                <!-- End Summernote -->
                                            </div>
                                           
                                            @if( $errors->has('lieu') )
                                            <div class="panel-body">
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Oh Non !</strong> {{ $errors->first('lieu') }}
                                                </div>
                                            </div>
                                            @endif

                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-control">
                                                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                            </div>
                                            <h3 class="panel-title">Les Tags ou Mot clés </h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>Un tag (ou étiquette, marqueur, libellé) est un mot-clé (signifiant) ou terme associé ou assigné à de l'information (par exemple une image, un article, ou un clip vidéo), qui décrit une caractéristique de l'objet et permet un regroupement facile des informations contenant les mêmes mots-clés.</p><br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Tags ou Mot clés : </label>
                                                    <div class="col-md-8">
                                                        <input id="jquery-tagIt-inverse" class="inverse" name="tags" {{ (empty($data->tags)? null : 'value='.$data->tags.'') }}>
                                                    </div>
                                                </div>
                                        </div>

                                        @if( $errors->has('tags') )
                                            <div class="panel-body">
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Oh Non !</strong> {{ $errors->first('tags') }}
                                                </div>
                                            </div>
                                            @endif

                                    </div>
                                    <div class="panel">
	                                    <div class="panel-heading">
	                                        <h3 class="panel-title">Validation des informations</h3>
	                                    </div>
	                                    <div class="panel-body">
	                                    <!--Buttons with label-->
	                                    <!--===================================================-->
	                                        <button class="btn btn-primary btn-labeled fa fa-thumbs-o-up" type="submit">Enregistrer et passer à l'étape suivante</button>
	                                        <button class="btn btn-danger btn-labeled fa fa-close" type="reset">Annuler</button>
	                                        <a href="{{route('admin.fmbb.activite')}}" class="btn btn-info btn-rounded btn-labeled fa fa-exclamation-triangle pull-right">Retour</a>
	                                     <!--===================================================-->
	                                    </div>
	                                </div>
	                            </form>
                                </div>
        </div>
    </div>
	
</section>

@include('admin.footer-match')