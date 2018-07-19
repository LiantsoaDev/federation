@extends('admin.layouts.app')

@section('content')

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
                                        <h3 class="panel-title">Formulaire pour les réglements interieurs de la fmbb</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form method="post" action="{{ $action }}" class="panel-body form-horizontal" enctype="multipart/form-data">
                                		{{ csrf_field() }}
                                        <!--Textarea-->
                                        <input type="hidden" name="id" value="{{ ((!empty($datas->id)? $datas->id : '')) }}"/>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-textarea-input">Titre du contenu</label>
                                            <div class="col-md-9">
                                                <textarea id="demo-textarea-input" rows="2" class="form-control" name="titre" placeholder="Le titre ici..." required="required">{{ ((!empty($datas->titre) ? $datas->titre : '')) }}</textarea>
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
                                        <h3 class="panel-title">Editeur de texte</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--Summernote-->
                                        <!--===================================================-->
                                        <textarea class="form-control" rows="15" cols="10" name="contenu">{{ ((!empty($datas->contenu)? html_entity_decode($datas->contenu) : '')) }}</textarea>
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
                                                    <input id="jquery-tagIt-inverse" class="inverse" name="tags" value="{{ ((!empty($datas->tags)?$datas->tags : '')) }}">
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
                                        <h3 class="panel-title">Date du Jour</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p class="text-thin mar-btm">Calendrier : Date du jour le : {{date('d-m-Y')}}</p>
                                        <!--Bootstrap Datepicker : Inline-->
                                        <!--===================================================-->
                                        <div id="demo-dp-inline">
                                            <div></div>
                                        </div>
                                        <!--===================================================-->
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </section>
 <script>
    var postTextarea = function() {
        var content = $('textarea[name="contenu"]').html($('#demo-summernote').code());
    }
</script>

@endsection