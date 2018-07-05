@include('admin.header-match')
<!--
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.min.css">
-->
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.min.js"></script>
-->

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
                                        <h3 class="panel-title">Formulaire de modification d'un Article</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form method="post" action="{{route('article.modif')}}" class="panel-body form-horizontal" enctype="multipart/form-data"
                                data-upload-template-id="template-upload-1" data-download-template-id="template-download-1" onsubmit="return postForm()">
                                		{{ csrf_field() }}
                                        <input type="hidden" name="reference_article" value="{{$details->id}}">
                                        <!--Readonly Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-readonly-input">Auteur</label>
                                            <div class="col-md-9">
                                                <input type="text" id="demo-readonly-input" class="form-control" name="auteur_article" value="{{Auth::user()->name}}" placeholder="Administrateur fmbb" readonly>
                                            </div>
                                        </div>
                                        <!--Textarea-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-textarea-input">Titre de l'Article</label>
                                            <div class="col-md-9">
                                                <textarea id="demo-textarea-input" rows="9" class="form-control" name="titre_article" required="required">{{$details->titre}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label"> Catégorie </label>
                                                <div class="col-md-8">
                                                    <!-- Default Bootstrap Select -->
                                                    <!--===================================================-->
                                                    <select class="form-control" name="categorie_article">
                                                        @foreach($categorie as $categ)
                                                            @if($details->categorie == $categ)
                                                                <option value="{{$categ}}" selected>{{$categ}}</option>
                                                            @else
                                                                <option value="{{$categ}}">{{$categ}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <!--===================================================-->
                                                </div>
                                            </div>
                                    <!--===================================================-->
                                    <!-- END BASIC FORM ELEMENTS -->
                                </div>
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title"><span class="glyphicon glyphicon-play-circle"></span> Lien Video ou Aperçu Video</h3>
                                    </div>
                                    <!--Checkboxes and Radio addons-->
                                    <!--===================================================-->

                                        <div class="panel-body">
                                            <!--Text Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Lien Video (Facultatif)</label>
                                            <div class="col-md-9">
                                                <input type="text" id="demo-text-input" class="form-control" name="lienvideo_article" value="{{$details->urlvideo}}">
                                                <small class="help-block">Insérer un lien Youtube, Vimeo, instagram, Facebook,...</small>
                                                <hr>
                                                @if( !is_null($details->urlcouverturevideo))
                                                <img src="{{asset('images/uploads/'.$details->urlcouverturevideo)}}" class="img-rounded" width="250" height="150" alt="Cinque Terre">
                                                @endif
                                                <input id="input-b3" name="file" type="file" class="file" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                                            </div>
                                        </div>
                                        </div>

                                    <!--===================================================-->
                                    <!--End Checkboxes and Radio addons-->
                                </div>
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title"><span class="fa fa-edit"></span> Editeur de texte ( contenu )</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--Summernote-->
                                        <!--===================================================-->
                                        <textarea class="form-control" rows="15" cols="10" name="contenu_article">{{ str_replace("<br />", "\n", $details->contenu ) }}</textarea>
                                        <!--===================================================-->
                                        <!-- End Summernote -->
                                    </div>
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
                                                    <input id="jquery-tagIt-inverse" class="inverse" name="tag_article" value="{{$details->tag}}">
                                                </div>
                                            </div>
                                    </div>
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
                                        <a href="{{route('listes.articles')}}" class="btn btn-info btn-rounded btn-labeled fa fa-exclamation-triangle pull-right">Retour</a>
                                     <!--===================================================-->
                                    </div>
                                </div>
                                <div class="panel hidden">

                                    <div class="panel-body">
                                        <h4 class="text-thin">Horizontal</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <p class="text-thin mar-btm">Default</p>
                                                <!--Default Range Slider-->
                                                <!--===================================================-->
                                                <div id="demo-range-def"></div>
                                                <!--===================================================-->
                                                <br>
                                                <div> <strong>Value : </strong> <span id="demo-range-def-val"></span> </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <p class="text-thin mar-btm">Step</p>
                                                <!--Range Slider : Steps-->
                                                <!--===================================================-->
                                                <div id="demo-range-step"></div>
                                                <!--===================================================-->
                                                <br>
                                                <div> <strong>Value : </strong> <span id="demo-range-step-val"></span> </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <h4 class="text-thin">Vertical</h4>
                                        <p class="text-thin mar-btm">Fixed Drag</p>
                                        <div class="mar-rgt box-inline">
                                            <!--Vertical Range Slider-->
                                            <!--===================================================-->
                                            <div id="demo-range-ver1" class="range-vertical"></div>
                                            <div id="demo-range-ver2" class="range-vertical"></div>
                                            <div id="demo-range-ver3" class="range-vertical"></div>
                                            <div id="demo-range-ver4" class="range-vertical"></div>
                                            <div id="demo-range-ver5" class="range-vertical"></div>
                                            <!--===================================================-->
                                        </div>
                                        <div id="demo-range-vpips" class="demo-pips range-vertical pips"></div>
                                        <br>
                                        <hr>
                                        <br>
                                        <h4 class="text-thin">Slider behaviour</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <p class="text-thin mar-btm">Drag</p>
                                                <!--Range Slider : Drag -->
                                                <!--===================================================-->
                                                <div id="demo-range-drg"></div>
                                            </div>
                                            <div class="col-xs-6">
                                                <p class="text-thin mar-btm">Fixed Drag</p>
                                                <!--Range slider : Fixed Drag -->
                                                <!--===================================================-->
                                                <div id="demo-range-fxt"></div>
                                            </div>
                                            <div class="col-xs-6">
                                                <p class="text-thin mar-btm">Combinate</p>
                                                <!--Range Slider : Combinate -->
                                                <!--===================================================-->
                                                <div id="demo-range-com"></div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <h4 class="text-thin mar-btm">Pips</h4>
                                        <!--Range Slider : Pips -->
                                        <!--===================================================-->
                                        <div id="demo-range-hpips" class="demo-pips pips"></div>
                                        <!--===================================================-->
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="panel">
                                </div>
                                <!--MASKED INPUT-->
                                <!--===================================================-->


                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Date de publication (non obligatoire)</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Programmer la publication de l'article selon une date (* facultatif).</p>
                                        <hr>
                                        <br>
                                        <p class="text-thin mar-btm">Rêgler la publicitation pour...</p>
                                        <!--Bootstrap Datepicker : Component-->
                                        <!--===================================================-->
                                        <div id="demo-dp-component">
                                            <div class="input-group date">
                                                <input type="text" class="form-control" name="date_article" value="{{date('d-m-Y',strtotime($details->date_publication))}}">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                                            </div>
                                            <small class="text-muted">choisissez une date</small>
                                        </div>
                                        <!--===================================================-->
                                        <br>
                                        <hr>
                                        <br>
                                        <p class="text-thin mar-btm">Calendrier : Date du jour le : {{date('d-m-Y')}}</p>
                                        <!--Bootstrap Datepicker : Inline-->
                                        <!--===================================================-->
                                        <div id="demo-dp-inline">
                                            <div></div>
                                        </div>
                                        <!--===================================================-->
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Options affichages </h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--checkbox-->
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <div class="checkbox">
                                                    <!-- Inline Icon Checkboxes -->
                                                    <label class="form-checkbox form-icon active">
                                                    <input type="checkbox" name="affichagescore_article"> Afficher les scores et les statistiques dans cette article. </label>
                                                    <br>
                                                    <hr>

                                                </div>
                                            </div>
                                        </div>
                                        <!--===================================================-->
                                        <!-- End multiUpload -->
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Listes des Images</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--multiUpload-->
                                        <div class="text-center">
										   @foreach($images as $img)
                                               <img src="{{asset('images/uploads/'.$img)}}" class="img-rounded" width="250" height="150" alt="Cinque Terre">
                                               &nbsp;<a href="{{route('delete.image',[$img,$details->image_id])}}" class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times"></a>
                                               @endforeach
										</div><hr>
                                        <!--===================================================-->
                                        <input id="input-b3" name="files[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                                        <!--===================================================-->
                                        <!-- End multiUpload -->
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </section>

 <script>
	var postForm = function() {
		var content = $('textarea[name="contenu_article"]').html($('#demo-summernote').code());
	}
</script>

@include('admin.footer-match')
