@include('admin.header-match')
<!--
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.min.css">
-->
<style>
  .modal-header, .close {
      background-image: url("{{link_img('assets/images/edition.jpg')}}");
      background-size: 600px;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.min.js"></script>
-->
<!-- Modal -->
  <div class="modal" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:100px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="text-center">Ajout d'un article</h2>
        </div>
        <div class="modal-body">
          <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">De quel article s'agit-il ?</h3>
                                    </div>
                                    <div class="panel-body demo-jasmine-btn">
                                        <!--Rounded Buttons-->
                                        <!--===================================================-->
                                        <a href="{{route('get.add.articles','blog-postv1')}}" type="button" class="btn btn-primary btn-labeled fa fa-dribbble btn-rounded">Résumé Match/Compétition</a>
                                        <button class="btn btn-mint btn-labeled fa fa-info btn-rounded" data-dismiss="modal">Article d'Information</button>
                                        <a href="{{route('get.add.articles','blog-postv2')}}" type="button" class="btn btn-warning btn-labeled fa fa-clipboard btn-rounded">Autres Articles</a>
                                        <!--===================================================-->
                                    </div>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
 <!--- end Modal -->

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
                                        <h3 class="panel-title">Formulaire d'Ajout d'un Article</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form method="post" action="{{route('post.addarticles')}}" class="panel-body form-horizontal" enctype="multipart/form-data"
                                data-upload-template-id="template-upload-1" data-download-template-id="template-download-1" onsubmit="return postForm()">
                                		{{ csrf_field() }}
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
                                                <textarea id="demo-textarea-input" rows="9" class="form-control" name="titre_article" placeholder="le Titre ici..." required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">La categorie de l'article</label>
                                            <div class="col-md-9">
                                                <div class="radio">
                                                    <!-- Inline Icon Radios Buttons -->
                                                    <!--===================================================-->
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text active">
                                                    <input type="radio" name="categorie_article" value="Equipe" checked> Equipe
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text">
                                                    <input type="radio" name="categorie_article" value="Injurie"> Injurie
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text">
                                                    <input type="radio" name="categorie_article" value="Compétition"> Compétition
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text">
                                                    <input type="radio" name="categorie_article" value="Fait divers"> Fait divers
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text">
                                                    <input type="radio" name="categorie_article" value="Organisation"> Organisation
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text">
                                                    <input type="radio" name="categorie_article" value="Formation"> Formation
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text">
                                                    <input type="radio" name="categorie_article" value="Arbitrage"> Arbitrage
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-default btn-labeled form-text">
                                                    <input type="radio" name="categorie_article" value="Actualité"> Actualité
                                                    </label>
                                                    <!--===================================================-->
                                                </div>
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
                                                <input type="text" id="demo-text-input" class="form-control" name="lienvideo_article" placeholder="http://">
                                                <small class="help-block">Insérer un lien Youtube, Vimeo, instagram, Facebook,...</small>
                                                <hr>
                                                 <!-- bootstrap-imageupload. -->
                                                <div class="imageupload panel panel-default">
                                                    <div class="panel-heading clearfix">
                                                        <div class="btn-group pull-right">
                                                            <button type="button" class="btn btn-default active btn-labeled fa fa-file-text-o">Fichier</button>
                                                            <button type="button" class="btn btn-default btn-labeled fa fa-link">URL image</button>
                                                        </div>
                                                    </div>
                                                    <div class="file-tab panel-body">
                                                        <label class="btn btn-mint btn-file">
                                                            <i class="fa fa-files-o" aria-hidden="true"></i>
                                                            <span>Parcourir...</span>
                                                            <!-- The file is stored here. -->
                                                            <input type="file" name="file">
                                                        </label>
                                                        <button type="button" class="btn btn-danger btn-labeled fa fa-times">Enlever</button>
                                                    </div>
                                                    <div class="url-tab panel-body">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control hasclear" placeholder="Insérer une Image de couverture pour la VIDEO...">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-default btn-labeled fa fa-file-image-o">Valider</button>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-danger btn-labeled fa fa-times">Enlever</button>
                                                        <!-- The URL is stored here. -->
                                                        <input type="hidden" name="file">
                                                         <small class="help-block">Ajouter une image en <code>mode horizontal</code> de préference.</small>
                                                    </div>
                                                </div>
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
                                        <textarea class="form-control" rows="15" cols="10" name="contenu_article"></textarea>
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
                                                    <input id="jquery-tagIt-inverse" class="inverse" name="tag_article" value="basketball, fmbb">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Validation des informations</h3>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-9">
                                                <div class="checkbox">
                                                    <!-- Inline Icon Checkboxes -->
                                                    <hr>
                                                    <label class="form-checkbox form-icon active">
                                                    <input type="checkbox" name="publication_article"> Ajouter l'article sans le publier directement.</label>
                                                    <br>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="panel-body">
                                    <!--Buttons with label-->
                                    <!--===================================================-->
                                        <button class="btn btn-primary btn-labeled fa fa-thumbs-o-up" type="submit">Enregistrer et passer à l'étape suivante</button>
                                        <button class="btn btn-danger btn-labeled fa fa-close" type="reset">Annuler</button>
                                        <a href="javascript:history.back()" class="btn btn-info btn-rounded btn-labeled fa fa-exclamation-triangle pull-right">Retour</a>
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
                                                <input type="text" class="form-control" name="date_article">
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
                                        <h3 class="panel-title">Uploader des Images </h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--multiUpload-->
                                        <div class="text-center">
										  <img src="{{link_img('assets/images/upload.png')}}" width="200" height="200" class="rounded" alt="...">
										</div><hr>
                                        <!--===================================================-->
                                        <input id="input-b3" name="files[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                                        <!--===================================================-->
                                        <small>N'ajouter que des images en <code>MODE HORIZONTAL</code></small>
                                        <!-- End multiUpload -->
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </section>

 <script>
$(document).ready(function(){
    $("#myModal").modal('show');
});
	var postForm = function() {
		var content = $('textarea[name="contenu_article"]').html($('#demo-summernote').code());
	}
</script>

@include('admin.footer-match')
