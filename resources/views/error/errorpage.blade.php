<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> F.M.B.B  | Fédération Malagasy du Basket Ball.</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{asset('plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{asset('css/demo/jasmine.css')}}" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="{{asset('plugins/pace/pace.min.css')}}" rel="stylesheet">
        <script src="{{asset('plugins/pace/pace.min.js')}}"></script>
    </head>
    <body>
        <!-- START OF CONTAINER -->
        <!--===================================================-->
        <div id="container" class="cls-container">
            <!-- CONTENT -->
            <!--===================================================-->
            <div class="cls-content">
                <div class="error-full-page">
                    <!-- start: 404 -->
                    <div class="col-sm-12 page-error pad-30">
                        <div class="error-number text-primary"> 500 </div>
                        <div class="error-details col-sm-6 col-sm-offset-3">
                            <h3> Oups! Une erreur s'est produite</h3>
                            <p> Quelque chose ne va pas, ne vous inquiètez pas
                                <br> Il semble que quelque chose s'est produite dans le systeme
                                <br> Pas de panique, nous sommes entrain de le fixer. Veuillez revisiter ultérieurement.
                                <br>
                                <a href="{{route('home')}}" class="btn btn-danger btn-return"> <i class="fa fa-home"> </i> Retour à l'accueil </a>
                            </p>
                        </div>
                    </div>
                    <!-- end: 404 -->
                </div>
            </div>
            <!--===================================================-->
            <!-- CONTENT -->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{asset('plugins/fast-click/fastclick.min.js')}}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    </body>

</html>