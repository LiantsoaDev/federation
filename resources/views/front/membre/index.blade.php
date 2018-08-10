@extends('front.layouts.app')


@section('content')

 <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="page-heading__title"><span class="highlight">{{$titre}}</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="{{route('home')}}">Accueil</a></li>
              <li class="active">{{$titre}}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

 <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">
       @foreach($organigramme as $org) 
        @if( URL::current() == $org->page )
         <h2>Structure Officiel de la fédération auprès de l'IBF</h2>
          <p>Cette organigramme est une représentation schématique des liens fonctionnels, organisationnels et hiérarchiques de la fédération auprès de l'IBF ( International Basketball Foundation). Il sert ainsi à donner une vue d’ensemble de la répartition des postes et fonctions au sein d’une structure. Cette cartographie simplifiée permet de visualiser les différentes relations de commandement ainsi que les rapports de subordination d’où une vision simple et claire des structures complexes.</p>

          <div class="spacer"></div>

          <figure class="aligncenter">
            <img src="{{asset('/images/organigramme/'.$org->organigramme)}}" alt="">
            <figcaption>{{$org->titre}}</figcaption>
          </figure>
          @endif
      @endforeach
        <!-- Wishlist -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4>{{$titre}}</h4>
          </div>
          <div class="card__content">
			 <div class="widget__content card__content">
               <ul class="posts posts--simple-list">
                 <li class="posts__item posts__item--category-1">
                   <figure class="posts__thumb">
                     <a href="#"><img src="{{asset('images/membres/'.$org->user_img)}}" height="560" width="350" alt=""></a>
                   </figure>
                   <div class="posts__inner">
                     <div class="posts__cat">
                       <span class="label posts__cat-label">{{$org->user_role}}</span>
                     </div>
                     <h5 class="posts__title"><a href="#">{{$org->user_name}}</a></h5>
                   </div>
                   <div class="posts__excerpt posts__excerpt--space">
                     {{$org->paragraphe}}
                   </div>
                   <footer class="posts__footer card__footer">
                     <div class="post-author">
                       <div class="post-author__info">
                         <h4 class="post-author__name">{{date('d/m/Y',strtotime($org->updated_at))}}</h4>
                       </div>
                     </div>
                     <ul class="post__meta meta">
                       <li class="meta__item meta__item--likes"><a href="#"> La fédération Malagasy du Basketball</a></li>
                     </ul>
                   </footer>
                 </li>
               </ul>
             </div>
          </div>
        </div>
        <!-- Wishlist / End -->
      </div>
    </div>

    <!-- Content / End -->

@endsection