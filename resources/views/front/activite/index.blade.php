@extends('front.layouts.app')

@section('content')
	
	  <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="page-heading__title">Programme d'activité <br>Saison <span class="highlight">{{$current}}</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="{{route('home')}}">Accueil</a></li>
              <li class="active">{{$titre}}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
	
	

    <!-- Player Pages Filter -->
    <nav class="content-filter">
      <div class="container">
        <a href="#" class="content-filter__toggle"></a>
        <ul class="content-filter__list">
        @foreach( $saison as $value )
          @if( $value == $current )
          <li class="content-filter__item content-filter__item--active"><a href="{{route('front.activite.autre',$value)}}" class="content-filter__link"><small>Saison</small>{{$value}}</a></li>
          @else
          <li class="content-filter__item content-filter__item"><a href="{{route('front.activite.autre',$value)}}" class="content-filter__link"><small>Saison</small>{{$value}}</a></li>
          @endif
        @endforeach
        </ul>
      </div>
    </nav>
    <!-- Player Pages Filter / End -->

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <div class="row">

          <!-- Content -->
          <div class="content col-md-8">

             <!-- Team Roster: Table -->
            <div class="card card--has-table">
              <div class="card__header card__header--has-btn">
                <h4>Programme d'activité</h4>
                <a href="{{route('front.activite.autre',\Carbon\Carbon::now()->subYear(2)->year.'-'.\Carbon\Carbon::now()->subYear(1)->year) }}" class="btn btn-default btn-outline btn-xs card-header__button">Voir la saison précédente</a>
              </div>
              <div class="card__content">
                <div class="table-responsive">
                  <table class="table table--lg team-roster-table">
                    <thead>
                      <tr>
                        <th class="team-roster-table__number">Mois</th>
                        <th class="team-roster-table__name">Date début</th>
                        <th class="team-roster-table__name hidden-xs hidden-sm">Date fin</th>
                        <th class="team-roster-table__name">Activité</th>
                        <th class="team-roster-table__name">Lieu d'activité</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($data as $key => $value)
                      @php
                        $i = date('m',strtotime($value->debut));
                        if( $i < date('m') ) $badge = '<button class="btn btn-success btn-xs">'.strtoupper($calendar[$i]).'</button>';
                        elseif( $i == date('m') ) $badge = '<button class="btn btn-danger btn-xs">'.strtoupper($calendar[$i]).'</button>';
                        if( $i > date('m')) $badge = '<button class="btn btn-warning btn-xs">'.strtoupper($calendar[$i]).'</button>';
                      @endphp
                      <tr>
                        <td class="team-roster-table__number">{!! $badge !!}</td>
                        <td class="team-roster-table__name">{{date('d/m/Y',strtotime($value->debut))}}</td>
                        <td class="team-roster-table__position hidden-xs hidden-sm">{{date('d/m/Y',strtotime($value->fin))}}</td>
                        <td class="team-roster-table__name">{{$value->contenu}}</td>
                        <td class="team-roster-table__name">{{$value->lieu}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Team Roster: Table / End -->

          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          <div id="sidebar" class="sidebar col-md-4">
            <!-- Widget: Social Buttons -->
            <aside class="widget widget--sidebar widget-social">
              <a href="https://www.facebook.com/madagascarbasketball/" class="btn-social-counter btn-social-counter--fb" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-facebook"></i>
                </div>
                <h6 class="btn-social-counter__title">Aimer notre Page Facebook</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> J'aime</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
              <a href="https://www.youtube.com" class="btn-social-counter btn-social-counter--gplus" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-youtube"></i>
                </div>
                <h6 class="btn-social-counter__title">S'abonner sur Youtube</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> S'abonner</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
            </aside>

            <!-- Article de la semaine -->
            @if( !array_is_empty($week) )
            <aside class="widget widget--sidebar card widget-popular-posts">
              <div class="widget__title card__header">
                <h4>Articles de la Semaine</h4>
              </div>
              <div class="widget__content card__content">
                <ul class="posts posts--simple-list">
                  @foreach($week as $w)
                  <li class="posts__item posts__item--category-{{rand(1,2)}}">
                    <figure class="posts__thumb">
                      <a href="{{route('front.details',[$w->id,$w->slug])}}"><img src="{{asset('images/uploads/'.$w->firstimage)}}" width="150" height="150" alt=""></a>
                    </figure>
                    <div class="posts__inner">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">{{$w->categorie}}</span>
                      </div>
                      <h6 class="posts__title"><a href="{{route('front.details',[$all->id,$all->slug])}}">{{$w->titre}}</a></h6>
                      <time datetime="2016-08-23" class="posts__date">{{date('d-m-Y',strtotime($w->date_publication))}}</time>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </aside>
            @endif

            <!-- Article du mois -->
            @if ( !array_is_empty($mois) )
            <aside class="widget widget--sidebar card widget-popular-posts">
              <div class="widget__title card__header">
                <h4>Articles du mois</h4>
              </div>
              <div class="widget__content card__content">
                <ul class="posts posts--simple-list">
                  @foreach($mois as $m)
                  <li class="posts__item posts__item--category-{{rand(1,2)}}">
                    <figure class="posts__thumb">
                      <a href="{{route('front.details',[$m->id,$m->slug])}}"><img src="{{asset('images/uploads/'.$m->firstimage)}}" width="150" height="150" alt=""></a>
                    </figure>
                    <div class="posts__inner">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">{{$m->categorie}}</span>
                      </div>
                      <h6 class="posts__title"><a href="{{route('front.details',[$m->id,$m->slug])}}">{{$m->titre}}</a></h6>
                      <time datetime="2016-08-23" class="posts__date">{{date('d-m-Y',strtotime($m->date_publication))}}</time>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </aside>
            @endif

          </div>
          <!-- Sidebar / End -->
        </div>

      </div>
    </div>

    <!-- Content / End -->
@endsection