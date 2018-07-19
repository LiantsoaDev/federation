 <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <i class="fa fa-dribbble brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">F.M.B.B</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        <li class="list-header">Evenements</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="javascript:void(0)">
                                            <i class="fa fa-home"></i>
                                            <span class="menu-title">Compétitions</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('show.event')}}"><i class="fa fa-caret-right"></i> Listes Evenements</a></li>
                                                <li><a href="{{route('add.event')}}"><i class="fa fa-caret-right"></i> Nv. Events</a></li>
                                                <li><a href="{{route('admin.addmatch')}}"><i class="fa fa-caret-right"></i> Nv. Match</a></li>
                                            </ul>
                                        </li>
                                        <!-- categorie -->
                                        <li>
                                            <a href="{{route('admin.categorie.index')}}">
                                            <i class="fa fa-bars"></i>
                                            <span class="menu-title">Catégories</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                        </li>
                                        <!--Category name-->
                                        <li class="list-header">Contenus</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-briefcase"></i>
                                            <span class="menu-title">Articles</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('listes.articles')}}"><i class="fa fa-caret-right"></i> Listes des Articles </a></li>
                                                <li><a href="{{route('add.articles')}}"><i class="fa fa-caret-right"></i> Ajouter Article </a></li>
                                                <li><a href="{{route('listes.articles')}}"><i class="fa fa-caret-right"></i> Registres Articles </a></li>
                                                <li><a href="ui-button.html"><i class="fa fa-caret-right"></i> Buttons </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-file"></i>
                                            <span class="menu-title">Pages</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('manage.video')}}"><i class="fa fa-caret-right"></i> Videos </a></li>
                                                <li><a href="pages-gallery.html"><i class="fa fa-caret-right"></i> Résultats </a></li>
                                                <li><a href="pages-directory.html"><i class="fa fa-caret-right"></i> Classements </a></li>
                                                <li><a href="pages-profile.html"><i class="fa fa-caret-right"></i> Live Streaming </a></li>
                                                <li><a href="pages-invoice.html"><i class="fa fa-caret-right"></i> Invoice </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-list"></i>
                                            <span class="menu-title">Configurations</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('admin.config.landing')}}"><i class="fa fa-caret-right"></i> Landing page </a></li>
                                                <li><a href="{{route('admin.config.img.index')}}"><i class="fa fa-caret-right"></i> Images </a></li>
                                                <li><a href="table-footable.html"><i class="fa fa-caret-right"></i> Publicités </a></li>
                                                <li><a href="{{route('configuration.site.index')}}"><i class="fa fa-caret-right"></i> Informations du site </a></li>
                                            </ul>
                                        </li>
                                        <li class="list-divider"></li>
                                        <!--Category name-->
                                        <li class="list-header">Menus</li>
                                         <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-sitemap"></i>
                                            <span class="menu-title">F.M.B.B</span>
                                            <span class="label label-pink pull-right">New</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('admin.fmbb.presentation')}}"><i class="fa fa-caret-right"></i> Présentation </a></li>
                                                <li><a href="{{route('admin.fmbb.admin')}}"><i class="fa fa-caret-right"></i> Comités executifs </a></li>
                                                <li><a href="{{route('admin.fmbb.comite-technique')}}"><i class="fa fa-caret-right"></i> Comités Techniques</a></li>
                                                <li><a href="{{route('admin.fmbb.region')}}"><i class="fa fa-caret-right"></i> Régions</a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Famille FMBB</a></li>
                                                <li><a href="{{route('admin.fmbb.partner')}}"><i class="fa fa-caret-right"></i> Partenaires officiels</a></li>
                                                <li><a href="{{route('admin.fmbb.mission')}}"><i class="fa fa-caret-right"></i> Missions et attributions </a></li>
                                                <li><a href="{{route('admin.reglement.interieur')}}"><i class="fa fa-caret-right"></i> Réglement intérieur </a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Historiques </a></li>
                                                <li><a href="{{route('admin.palmares.show')}}"><i class="fa fa-caret-right"></i> Palmarés </a></li>
                                                <li>
                                                    <a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Programme d'activités   <span class="label label-mint pull-right"> + </span></a>
                                                    <ul class="collapse">
                                                        <li><a href="{{route('admin.fmbb.activite')}}"><i class="fa fa-caret-right"></i> saison {{ \Carbon\Carbon::now()->subYear()->year }}-{{ \Carbon\Carbon::now()->year }} </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Licenciés </a></li>
                                                <li><a href="{{route('admin.unifie.show')}}"><i class="fa fa-caret-right"></i> R.U.C </a></li>
                                            </ul>
                                        </li>
                                         <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-sitemap"></i>
                                            <span class="menu-title">3x3</span>
                                            <span class="label label-pink pull-right">New</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="mail-inbox.html"><i class="fa fa-caret-right"></i> Actus </a></li>
                                                <li><a href="mail-compose.html"><i class="fa fa-caret-right"></i> Présentation </a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Communautés 3x3</a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> FIBA 3x3 Challenge U18</a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Les rêgles</a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Equipes </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="ui-widgets.html">
                                            <i class="fa fa-sitemap"></i>
                                            <span class="menu-title">
                                               Coupe du Président
                                            <span class="label label-pink pull-right">New</span>
                                            </span>
                                            </a>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="ui-widgets.html">
                                            <i class="fa fa-sitemap"></i>
                                            <span class="menu-title">
                                               N1A
                                            <span class="label label-pink pull-right">New</span>
                                            </span>
                                            </a>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="ui-widgets.html">
                                            <i class="fa fa-sitemap"></i>
                                            <span class="menu-title">
                                               N1B
                                            <span class="label label-pink pull-right">New</span>
                                            </span>
                                            </a>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="ui-widgets.html">
                                            <i class="fa fa-sitemap"></i>
                                            <span class="menu-title">
                                               U18
                                            <span class="label label-pink pull-right">New</span>
                                            </span>
                                            </a>
                                        </li>
                                        <!-- Menu list item -->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-plus-square"></i>
                                            <span class="menu-title">
                                            Ajouter
                                            </span>
                                            </a>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="menu-title">Messagerie</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="mail-inbox.html"><i class="fa fa-caret-right"></i> Réception </a></li>
                                                <li><a href="mail-compose.html"><i class="fa fa-caret-right"></i> Nouveau Message </a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Aperçu des Mails</a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-map-marker"></i>
                                            <span class="menu-title">
                                            Maps
                                            <span class="label label-mint pull-right">New</span>
                                            </span>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="maps-gmap.html">Google Maps</a></li>
                                                <li><a href="maps-vectormap.html">Vector Maps</a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-plus-square"></i>
                                            <span class="menu-title">Menu Level</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="#"><i class="fa fa-caret-right"></i> Second Level Item</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"></i> Second Level Item</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"></i> Second Level Item</a></li>
                                                <li class="list-divider"></li>
                                                <li>
                                                    <a href="#">Third Level<i class="arrow"></i></a>
                                                    <!--Submenu-->
                                                    <ul class="collapse">
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level<i class="arrow"></i></a>
                                                    <!--Submenu-->
                                                    <ul class="collapse">
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                        <li class="list-divider"></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!--Widget-->
                                    <!--================================-->
                                    <div class="mainnav-widget">
                                        <!-- Show the button on collapsed navigation -->
                                        <div class="show-small">
                                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                            <i class="fa fa-desktop"></i>
                                            </a>
                                        </div>
                                        <!-- Hide the content on collapsed navigation -->
                                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                            <ul class="list-group">
                                                <li class="list-header pad-no pad-ver">Server Status</li>
                                                <li class="mar-btm">
                                                    <span class="label label-primary pull-right">15%</span>
                                                    <p>CPU Usage</p>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                            <span class="sr-only">15%</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mar-btm">
                                                    <span class="label label-purple pull-right">75%</span>
                                                    <p>Bandwidth</p>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                            <span class="sr-only">75%</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--================================-->
                                    <!--End widget-->
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; {{date('Y')}} {{config('app.name')}}</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
        <!--jQuery UI [ REQUIRED ]-->
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Selection Equipe Poule Javascript [OPTIONAL] -->
        <script src="{{asset('js/select-poule.js')}}"></script>
        <!-- Validation form [OPTIONAL] -->
        <script src="{{asset('js/validation-form.js')}}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{asset('plugins/fast-click/fastclick.min.js')}}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{asset('plugins/nanoscrollerjs/jquery.nanoscroller.min.js')}}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{asset('plugins/metismenu/metismenu.min.js')}}"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <!--DataTables [ OPTIONAL ]-->
        <script src="{{asset('plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="{{asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="{{asset('plugins/tag-it/tag-it.min.js')}}"></script>
        <!--Chosen [ OPTIONAL ]-->
        <script src="{{asset('plugins/chosen/chosen.jquery.min.js')}}"></script>
        <!--noUiSlider [ OPTIONAL ]-->
        <script src="{{asset('plugins/noUiSlider/jquery.nouislider.all.min.js')}}"></script>
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <script src="{{asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
        <!--FooTable [ OPTIONAL ]-->
        <script src="{{asset('plugins/fooTable/dist/footable.all.min.js')}}"></script>
        <!--FooTable Example [ SAMPLE ]-->
        <script src="{{asset('js/demo/tables-footable.js')}}"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="{{asset('js/demo/tables-datatables.js')}}"></script>

        <script type="text/javascript">
           $('#timepicker').timepicker({
                timeFormat: 'H:m:s',
                minuteStep: 5,
                showInputs: false,
                disableFocus: true
            });
        </script>
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
       <script src="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript">
            $('#datepicker').datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked",
                autoclose: true,
                todayHighlight: true
                });
            $('#datepicker').on('changeDate', function() {
                $('#my_hidden_input').val(
                    $('#datepicker').datepicker('getFormattedDate')
                );
            });
        </script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="{{asset('plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="{{asset('plugins/masked-input/jquery.maskedinput.min.js')}}"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src="{{asset('plugins/summernote/summernote.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('plugins/screenfull/screenfull.js')}}"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="{{asset('plugins/dropzone/dropzone.min.js')}}"></script>
        <!-- Image Upload JS [OPTIONAL] -->
        <script src="{{asset('js/image-upload.js')}}"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src="{{asset('js/demo/form-component.js')}}"></script>

        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>
        @if( url()->current() == route('admin.fmbb.activite') )
            @include('admin.fmbb.activite.ajax')
        @endif
    </body>

</html>
