@include('admin.header-match')

<section id="page-content">
  <div class="row">
    <div class="col-lg-8">
      <!-- Message de notification -->
      @include('admin.notification')
      <!-- fin Notification -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Informations du Site</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" method="post" action="{{$action}}" enctype="multipart/form-data">
                                        <!--Text Input-->
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{ (empty($configuration->id) ? null : $configuration->id) }}"/>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Adresse E-mail</label>
                                            <div class="col-md-9">
                                                <input type="text" id="demo-text-input" class="form-control" name="email" placeholder="Adresse email" value="{{ (empty($configuration->email)? null : $configuration->email ) }}" required>
                                                <small class="help-block" style="color:red">{{ ($errors->has('email')) ? null : $errors->first('email') }}</small>
                                            </div>
                                        </div>
                                        <!--Email Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-email-input">Adresse Contact</label>
                                            <div class="col-md-9">
                                                <input type="text" id="demo-email-input" class="form-control" name="contact" placeholder="Entrer votre contact..." value="{{ (empty($configuration->contact)? null : $configuration->contact ) }}" required>
                                                <small class="help-block" style="color:red">{{ ($errors->has('required')) ? null : $errors->first('required') }}</small>
                                            </div>
                                        </div>
                                        <!--Password-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-password-input">Titre</label>
                                            <div class="col-md-9">
                                                <input type="text" id="demo-password-input" class="form-control" name="titre" placeholder="Entrer le titire" value="{{ (empty($configuration->titre)? null : $configuration->titre ) }}" required>
                                                  <small class="help-block" style="color:red">{{ ($errors->has('required')) ? null : $errors->first('required') }}</small>
                                            </div>
                                        </div>
                                        <!--Textarea-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-textarea-input">Description meta du site</label>
                                            <div class="col-md-9">
                                                <textarea id="demo-textarea-input" rows="9" class="form-control" name="description" placeholder="Description du site..." max="255" required>{{ (empty($configuration->description)? null : $configuration->description ) }}</textarea>
                                            </div>
                                        </div>
                                        <!-- Aperçu favicon -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-textarea-input">Aperçu du favicon : </label>
                                            <div class="col-md-9">
                                                <img src="{{ $configuration->favicon }}" class="img-rounded" alt="Cinque Terre" width="104" height="104">
                                            </div>
                                        </div>
                                        <!--Upload Image favicon -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-password-input">Uploader un favicon</label>
                                            <div class="col-md-9">
                                                <input type="file" name="file" id="demo-file-input" class="form-control" placeholder="uploader un favicon">
                                                  <small class="help-block" style="color:red">{{ ($errors->has('dimensions')) ? null : $errors->first('dimensions') }}</small>
                                                  <small class="help-block" style="color:red">{{ ($errors->has('file')) ? null : $errors->first('file') }}</small>
                                            </div>
                                        </div>
                                        <!-- Tags -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tags ou mots clés</label>
                                            <div class="col-md-8">
                                                <input id="jquery-tagIt-inverse" class="inverse" name="tags" value=" {{ (empty($configuration->tags)? 'FMBB, fédération Malagasy du basketball, Antananarivo, Madagascar' : $configuration->tags ) }} "/>
                                            </div>
                                            <hr>
                                            <small style="color:red">
                                              @if( $errors->any() )
                                                @foreach( $errors->all() as $er )
                                                 <li>{{$er}}</li>
                                                @endforeach
                                              @endif
                                            </small>
                                        </div>
                                        <hr>
                                        <button class="btn btn-success btn-labeled fa fa-save pull-right">Sauvegarder</button>
                                    </form>

                                </div>

                                <!--===================================================-->
                                <!-- GESTION DES RESEAUX SOCIAUX -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Gestion des Réseaux Sociaux</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" method="post" action="{{$action_rs}}">
                                        <!--Text Input-->
                                        {{csrf_field()}}
                                        @foreach($social as $soc)
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input"><i class="fa fa-{{$soc->libelle}}-square"></i> {{$soc->libelle}}</label>
                                            <div class="col-md-9">
                                                <input type="text" id="demo-text-input" class="form-control" name="{{$soc->libelle}}" placeholder="ex: www.{{$soc->libelle}}.com/..." value="{{ (empty($soc->link)? null : $soc->link ) }}">
                                            </div>
                                        </div>
                                        @endforeach
                                        <button class="btn btn-primary btn-labeled fa fa-save">Sauvegarder</button>
                                        <button class="btn btn-danger btn-labeled fa fa-undo pull-right">Retour à la page précedente</button>
                                        <button class="btn btn-default btn-labeled fa fa-ban pull-right">Annuler</button>
                                    </form>
                                    <!--===================================================-->
                                    <!-- END BASIC FORM ELEMENTS -->
                                </div>
                            </div>
  </div>
</section>
@include('admin.footer-match')
