@include('admin.header-match')

<div id="page-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="panel">
                                    <div class="btn-toolbar pad-all">
                                        <div class="btn-group">
                                            <a href="{{route('listes.articles')}}" class="btn btn-sm btn-default" type="button">
                                            <i class="fa fa-mail-reply"></i>
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="javascript:window.location.reload()" class="btn btn-sm btn-default" type="button">
                                            <i class="fa fa-refresh"></i>
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="{{route('article.archive',$details->id)}}" class="btn btn-sm btn-default" type="button">
                                            <i class="fa fa-archive"></i>
                                            </a>
                                            <button class="btn btn-sm btn-default" type="button">
                                            <i class="fa fa-ban"></i>
                                            </button>
                                            <a href="{{route('modif.article',$details->id)}}" class="btn btn-sm btn-default" type="button">
                                            <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('article.archive',$details->id)}}" class="btn btn-sm btn-default" type="button">
                                            <i class="fa fa-trash-o"></i>
                                            </a>
                                            <a href="{{route('article.publie',$details->id)}}" class="btn btn-sm btn-default" type="button">
                                            <i class="fa fa-book"></i>
                                            </a>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    <div class="panel-body">
                                        <div class="mail-list">
                                            <div class="mail-sender">
                                                <div class="media">
                                                    <a href="#" class="pull-left"> <img alt="" src="img/av4.png" class="media-object"> </a> <span class="media-meta pull-right">{{ $details->created_at }}</span>
                                                    <h5>
                                                        {{Auth::user()->name}}
                                                    </h5>
                                                    <small class="text-muted">From: {{Auth::user()->email}}</small> 
                                                </div>
                                            </div>
                                            <div class="view-mail">
                                                <h4>{{$details->titre}}</h4>
                                                <p>{!!$details->contenu!!} </p>
                                            </div>
                                             <div class="panel-body demo-jasmine-btn">
                                             	@foreach($tags as $tg)
                                             	<button class="btn btn-default btn-rounded">{{$tg}}</button>
                                             	@endforeach
                                             </div>
                                            <hr>
                                            <div class="attachment-mail">
                                                <ul>
                                                	@foreach($images as $key => $img)
                                                    <li>
                                                        <a class="atch-thumb" href="#"> <img src="{{asset('images/uploads/'.$img)}}" alt=""> </a>
                                                        <p> {{$img}} </p>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-8">
					                                 <iframe width="760" height="445" src="{{$details->urlvideo}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><hr>
					                            </div>
                                            </div>
                                            <div class="panel-body">
                                            	<div class="panel-heading"><h2>Réferencement ou SEO de l'Article : Les Balise Meta</h2></div><br><hr>
                                                <div class="col-md-12">
                                                	<code>&lt;meta name="description" content="{{strip_tags($details->page_description)}}"&gt;</code><br>
					                                <code>&lt;meta itemprop="name" content="{{strtolower($details->page_titre)}}"&gt;</code><br>
					                                 <code>&lt;meta itemprop="description" content="{{strip_tags($details->page_description)}}"&gt;</code><br>
					                                 <code>&lt;meta itemprop="image" content="{{asset('images/referencement/'.$details->imagereference)}}"&gt;</code><br><br>
					                                 <code>&lt;meta name="twitter:title" content="{{strtolower($details->page_titre)}}"&gt;</code><br>
					                                 <code>&lt;meta name="twitter:description" content="{{strip_tags($details->page_description)}}"&gt;</code><br>
					                                 <code>&lt;meta name="twitter:creator" content="@fmbb"&gt;</code><br>
					                                 <code>&lt;meta name="twitter:url" content="Page URL"&gt;</code><br>
					                                 <code>&lt;meta name="twitter:domain" content="domain URL"&gt;</code><br>
					                                 <code>&lt;meta name="twitter:image:src" content="{{asset('images/referencement/'.$details->imagereference)}}"&gt;</code><br><br>
					                                 <code>&lt;meta property="og:title" content="{{strtolower($details->page_titre)}}"&gt;</code><br>
					                                 <code>&lt;meta property="og:url" content="http://www.example.com/"&gt;</code><br>
					                                 <code>&lt;meta property="og:image" content="http://example.com/image.jpg"&gt;</code><br>
					                                 <code>&lt;meta property="og:description" content="{{strip_tags($details->page_description)}}"&gt;</code><br>
					                                 <code>&lt;meta property="og:site_name" content="{{config('app.name')}}"&gt;</code><br><br>
					                                 <code>&lt;meta property="fb:admins" content="Facebook numeric admin ID"&gt;</code><br>
					                                 <code>&lt;meta property="fb:app_id" content="Facebook numeric app ID"&gt;</code><br>
					                                 <code>&lt;meta property="article:author" content="Facebook URL of author profile"&gt;</code><br>
					                                 <code>&lt;meta property="article:publisher" content="Facebook URL of website/fan page"&gt;</code><br>
					                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            	<div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user"> </i> Information</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-globe"></i></td>
                                                    <td> Catégorie </td>
                                                    <td><span class="label label-sm label-default">{{$details->categorie}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-calendar"></i></td>
                                                    <td> Date publication </td>
                                                    <td><span class="label label-sm label-default">{{date('d/m/Y',strtotime($details->date_publication))}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-info"></i></td>
                                                    <td> Statut </td>
                                                    <td>{!!$details->statut!!}</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-book"></i></td>
                                                    <td> Nbre lecture </td>
                                                    <td> <span class="label label-sm label-warning">{{$details->nbrelecture}}</span> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                           	</div>
                        </div>
                    </div>


@include('admin.footer-match')