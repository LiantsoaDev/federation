<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*-----------------------------Front-Office -------------------------------------------- */
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin/', function(){ return view('admin.authentification.login-admin');})->name('auth.admin');
Route::get('articles/{id}/{slug}',['as' => 'front.details', 'uses' => 'ArticlesController@detailarticleFront'])->where(['id' => '[0-9]+', 'slug' => '[a-z0-9\-]+'])->middleware('verifyarticle');
 //Route vers live streaming
    Route::get('live-streaming/coupe-du-president-2018',['as' => 'live', 'uses' => 'LivesController@liveStreaming']);
//Route insertion commentaire
    Route::post('insert-comments',['as' => 'front.insert.comms','uses' => 'CommentsController@insert']);
//Route presentation de la fmbb
    Route::get('presentation-fmbb',['as' => 'front.presentation.fmbb', 'uses' => 'ContenusController@getpresentation']);
//Route Mission et Attribution de la fmbb
    Route::get('missions-attributions',['as' => 'front.missions-attributions','uses' => 'MissionsController@getmission']);
//Route Reglement interieur de la fmbb
    Route::get('reglement-interieur',['as' => 'front.reglement-interieur','uses' => 'ReglementsController@get']);
//Route Programme d'activite de la fmbb
    Route::get('programme-activite',['as' => 'front.programme.activite','uses' => 'ActivitesController@getactivite']);


/*-----------------------------Backoffice admin -------------------------------------------- */

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/home',['as' => 'show.event', 'uses' => 'EventsController@showevents']);

    Route::get('listes-evenements',['as' => 'show.event', 'uses' => 'EventsController@showevents']);
    Route::get('ajout-evenement',['as' => 'add.event', 'uses' => 'EventsController@addevents']);
    Route::get('insertion-equipe',['as' => 'add.team', 'uses' => 'EventsController@addteams']);
    Route::post('formaddevents',['as' => 'method.addevent', 'uses' => 'EventsController@ajoutevenement']);
    Route::post('formaddteams',['as' => 'method.addteam', 'uses' => 'EventsController@ajoutequipevent']);
    Route::get('update-event/{id}',['as' => 'event.showupdate', 'uses' => 'EventsController@showupdate'])->where('id','[0-9]+')->middleware('verifyid');
    Route::post('form-update',['as' => 'form.update.event', 'uses' => 'EventsController@formupdatevent']);
    Route::get('detail-event/{id}',['as' => 'event.detail', 'uses' => 'EventsController@detailevent'])->where('id','[0-9]+')->middleware('verifyid');
    Route::get('suspendre/{id}',['as' => 'event.suspend', 'uses' => 'EventsController@suspendre'])->where('id','[0-9]+')->middleware('verifyid');

    Route::post('getnewmatch',['as' => 'new.match', 'uses' => 'CalendriersController@insertnewmatch'])->middleware('verifyequipe');

    Route::post('multiple',['as' => 'js.teams', 'uses' => 'EventsController@multiples']);
    Route::get('error',['as' => 'error.errorpage', 'uses' => function(){ return view('error.errorpage'); }]);

    Route::get('calendrier/{id}',['as' => 'admin.calendrier', 'uses' => 'CalendriersController@showcalendrier'])->where('id','[0-9]+')->middleware('verifyid');
    Route::get('update-match/{id}',['as' => 'admin.show-update-match', 'uses' => 'CalendriersController@showupdatematch'])->where('id','[0-9]+')->middleware('sessionidevent');
    Route::get('addnewmatch',['as' => 'admin.addmatch', 'uses' => 'CalendriersController@addnewmatch' ])->middleware('verifysessionid');
    Route::post('reporting-match',['as' => 'route.report', 'uses' => 'CalendriersController@reportingmatch']);
    Route::get('match-declencheur/{id}',['as' => 'admin.declencheur', 'uses' => 'MatchsController@declencheurMatch'])->where('id','[0-9]+');
    Route::post('match-start', ['as' => 'match.start' , 'uses' => 'MatchsController@setScore']);

    Route::get('poules/{poule}',['as' => 'poules', 'uses' => 'CalendriersController@chargementResultatPoule']);

    //Route page vers ajout nouveau Article
    Route::get('ajout-article', ['as' => 'add.articles', 'uses' => 'ArticlesController@showAdminArticle']);
    //Route Choix des Types d'articles
    Route::get('type-article/{type}',['as' => 'get.add.articles', 'uses' => 'ArticlesController@choiceTypeArticle'])->where('type','[a-z0-9\-]+')->middleware('verifyTypeCateg');
    //Route Ajout nouvel article
    Route::post('moteur-ajout',['as' => 'post.addarticles', 'uses' => 'ArticlesController@ajoutArticle']);
    //listes de tous les articles
    Route::get('listes-articles',['as' => 'listes.articles', 'uses' => 'ArticlesController@showAllArticles']);
    //detail article dans la backoffice
    Route::get('detail-article/{id}',['as' => 'detail.article.admin', 'uses'=> 'ArticlesController@detailBackArticle'])->where('id','[0-9]+');
    //Modification article backoffice
    Route::get('modification-article/{id}',['as' => 'modif.article', 'uses' => 'ArticlesController@showmodificationArticle'])->where('id','[0-9]+');
    //Moteur Modification d'un article backoffice
    Route::post('modification',['as' => 'article.modif','uses'=>'ArticlesController@modificationArticle']);
    //Suppression d'une Image
    Route::get('suppression-image/{name}/{id}',['as' => 'delete.image','uses'=>'ImagesController@deleteImage']);
    //Archiavge article
    Route::get('archiver/{id}',['as' => 'article.archive','uses' => 'ArticlesController@archivageArticle'])->where('id','[0-9]+');
    //Publier article
    Route::get('publier/{id}',['as'=> 'article.publie','uses' => 'ArticlesController@publicationArticle'])->where('id','[0-9]+');
    //Mettre un article A la Une
    Route::get('mise-en-une/{id}',['as' => 'en.une', 'uses' => 'ArticlesController@misenUne'])->where('id','[0-9]+');
    //Annuler la mise en Une
    Route::get('annulation-une/{id}',['as' => 'annulation.une', 'uses' => 'ArticlesController@annulerUne'])->where('id','[0-9]+');

    //listes de tous les videos dans la backOffice
    Route::get('gestion-videos',['as' => 'manage.video','uses' => 'PagesController@showlistesvideos']);
    //Route publication video
    Route::get('publicationvideo/{id}',['as' => 'publish.video', 'uses' => 'PagesController@publishvideo'])->where('id','[0-9]+');
    // Route annulation publication
    Route::get('annulationvideo/{id}',['as' => 'annulation.video', 'uses' => 'PagesController@annulationPublication'])->where('id','[0-9]+');

    //Route parametrage de la fmbb
    Route::prefix('fmbb')->group(function () {
        //gestion du présentation de la fmbb
        Route::get('presentation',['as' => 'admin.fmbb.presentation', 'uses' => 'ContenusController@create']);
        //modification de la presentation de la fmbb
        Route::post('update-presentation',['as' => 'admin.update.presentation', 'uses' => 'ContenusController@edit']);
        //listes des administrations de la fmbb
        Route::get('administration',['as' => 'admin.fmbb.admin','uses' => 'StructuresController@list']);
        //ajout nouveau membre comité
        Route::post('ajout-comite',['as' => 'admin.fmbb.addcomity', 'uses' => 'StructuresController@create']);
        //update membre comité
        Route::post('update-comite',['as' => 'admin.fmbb.update-comity','uses' => 'StructuresController@edit']);
        //Delete membre comité
        Route::get('delete-comite/{id}',['as' => 'admin.fmbb.delete-comity','uses' => 'StructuresController@delete'])->where('id','[0-9]+');
        //listes des comités techniques de la fmbb
        Route::get('comite-technique',['as' => 'admin.fmbb.comite-technique','uses' => 'TechniquesController@list']);
        //modification membre technique
        Route::post('update-technique',['as' => 'admin.fmbb.update-technic', 'uses' => 'TechniquesController@edit']);
        //creation membre technique
        Route::post('add-technic',['as' => 'admin.fmbb.add-technic','uses'=>'TechniquesController@create']);
        //Delete membre technique
        Route::get('delete-technic/{id}',['as' => 'admin.fmbb.delete-technic','uses' => 'TechniquesController@delete'])->where('id','[0-9]+');
        //gestion index region
        Route::get('regions',['as' => 'admin.fmbb.region','uses'=> 'RegionsController@index']);
        //Ajout region
        Route::post('add-region', ['as' => 'admin.fmbb.add-region','uses'=>'RegionsController@create']);
        //update region
        Route::post('update-region',['as' => 'admin.fmbb.update-region','uses'=>'RegionsController@edit']);
        //gestion Mission et attribution
        Route::get('missions-attributions',['as' => 'admin.fmbb.mission','uses'=>'MissionsController@index']);
        //add Mission
        Route::post('add-missions',['as' => 'admin.fmbb.add-mission','uses' => 'MissionsController@edit']);
    });
    //Route index Configuration Landing page
    Route::get('config-landingpage',['as' => 'admin.config.landing', 'uses'=>'ConfigurationsController@index']);
    //Route action add new landing page
    Route::post('add-landing-page',['as' => 'admin.fmbb.add-landing-page','uses'=>'ConfigurationsController@insert']);
    //Route suppression landing page
    Route::get('delete-landing/{id}',['as' => 'admin.fmbb.delete-landing','uses'=>'ConfigurationsController@delete'])->where('id','[0-9]+');
    //Route Apply LandingPage
    Route::get('apply/{id}',['as' => 'admin.config.apply','uses' => 'ConfigurationsController@apply'])->where('id','[0-9]+');


    //Route Configuration Image Premier Plan Accueil
    Route::get('premier-plan',['as' => 'admin.config.img.index','uses' => 'CoversController@index']);
    //Route configuration ajout Couverture Image
    Route::post('image-cover',['as' => 'admin.fmbb.cover.add','uses' => 'CoversController@insert']);
    //Route to delete Image Cover
    Route::get('delete-cover/{id}',['as'=>'admin.fmbb.delete-cover','uses'=>'CoversController@delete'])->where('id','[0-9]+');
    //Route apply to Image Covers
    Route::get('apply-cover/{id}',['as' => 'admin.fmbb.apply-cover','uses'=>'CoversController@apply'])->where('id','[0-9]+');


    //Route Configuration des Informations du site
    Route::get('configuration-du-site',['as'=>'configuration.site.index','uses' => 'InformationDuSitesController@index']);
    //Route Modification des Information du site
    Route::post('update-information-site',['as'=>'admin.configsite.base','uses'=>'InformationDuSitesController@update']);
    //Route update Social media
    Route::post('update-rs',['as' => 'admin.configsite.rs','uses'=>'InformationDuSitesController@socialmedia']);

    //Route insertion nouvelle videos
    Route::post('insert-video',['as' => 'admin.video.insert','uses'=>'PagesController@add']);
    //Route Suppression video
    Route::get('suppression-video/{id}',['as'=>'admin.video.delete','uses'=>'PagesController@delete'])->where('id','[0-9]+');

    //Route index reglement interieur fmbb
    Route::get('reglement-interieur',['as' => 'admin.reglement.interieur', 'uses' => 'ReglementsController@edit']);
    //Route Update reglement interieur fmbb
    Route::post('update-reglement-interieur',['as' => 'update.reglement.interieur', 'uses' => 'ReglementsController@update']);

    //Route Programme Activite fmbb
    Route::get('programme-activite',['as' => 'admin.fmbb.activite', 'uses' => 'ActivitesController@index']);
    //Route show form edit Activite fmbb
    Route::get('insertion-programme-activite',['as' => 'admin.fmbb.edit', 'uses' => 'ActivitesController@edit']);
    //Route action insert Activite fmbb
    Route::post('insert-activite',['as' => 'admin.fmbb.insert', 'uses' => 'ActivitesController@insert']);
    //Route action update Activite
    Route::post('update-activite',['as' => 'admin.fmbb.update', 'uses' => 'ActivitesController@update']);
    //Route show form update
    Route::get('update-programme-activite/{id}', ['as' => 'update.form.activite' , 'uses' => 'ActivitesController@show'])->where('id','[0-9]+');
    //Route Ajax Activite
    Route::get('ajax-activite/{saison}',['as' => 'ajax.activite','uses' => 'ActivitesController@getByAjaxSeason']);
    //Route delete Activite
    Route::get('suppression-activite/{id}',['as' => 'activite.delete','uses' => 'ActivitesController@delete']);



});
