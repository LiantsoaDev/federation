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

    <!-- Post Filter -->
    <div class="post-filter">
      <div class="container">
        <form method="POST" action="{{$action}}" class="post-filter__form clearfix">
          {{csrf_field()}}
          <div class="post-filter__select">
            <label class="post-filter__label">Catégories</label>
            <select class="cs-select cs-skin-border" name="categorie">
              <option value="all" disabled selected>Toutes</option>
              @foreach($compets as $cmps)
              <option value="{{$cmps}}">{{$cmps}}</option>
              @endforeach
            </select>
          </div>
          <div class="post-filter__select">
            <label class="post-filter__label">Années</label>
            <select class="cs-select cs-skin-border" name="date">
              <option value="all" disabled selected>Toutes</option>
              @foreach($dates as $dts)
              <option value="{{$dts}}">{{$dts}}</option>
              @endforeach
            </select>
          </div>
          <div class="post-filter__select">
            <label class="post-filter__label">Trophés</label>
            <select class="cs-select cs-skin-border" name="trophy">
              <option value="all" disabled selected>Tous</option>
              <option value="médaille">Médaille</option>
              <option value="coupe">Coupe</option>
              <option value="trophée">Trophée</option>
            </select>
          </div>
          <div class="post-filter__select">
            <label class="post-filter__label">Genre</label>
            <select class="cs-select cs-skin-border" name="genre">
              <option value="all" disabled selected>Tous</option>
              <option value="homme">Homme</option>
              <option value="femme">Femme</option>
            </select>
          </div>
          <div class="post-filter__submit">
            <button type="submit" class="btn btn-default btn-lg btn-block">Demarrer le Filtre</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Post Filter / End -->
    

     <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">
  
        <!-- Wishlist -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4>Résultats de la recherche : <b>{{count($palmares)}} résultat(s) trouvé(s)</b></h4>
          </div>
          <div class="card__content">
          @if( !array_is_empty($palmares) )
            <div class="table-responsive">
              <table class="table shop-table">
                <thead>
                  <tr>
                    <th class="product__photo">Photo</th>
                    <th class="product__info">Catégorie</th>
                    <th class="product__desc visible-md visible-lg">Palmarès</th>
                    <th class="product__price">Année</th>
                    <th class="product__availability">Genre</th>
                  </tr>
                </thead>
                <tbody>
                @foreach( $palmares as $palm)
                  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb">
                        <a href="#"><img src="{{asset('assets/images/samples/trophy-03.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info">
                      <span class="product__cat">Equipe nationale</span>
                      <h5 class="product__name"><a href="#">{{$palm->libellecategorie}}</a></h5>
                      <div class="product__ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star empty"></i>
                      </div>
                    </td>
                    <td class="product__desc visible-md visible-lg">
                      {{$palm->prix}}
                    </td>
                    <td class="product__price">
                      {{ date('Y',strtotime($palm->date)) }}
                    </td>
                    <td class="product__availability">
                      {{ strtoupper($palm->genre) }}
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            @endif
          </div>
        </div>
        <!-- Wishlist / End -->

      </div>
    </div>

    <!-- Content / End -->
        </div>

      </div>
    </div>

    <!-- Content / End -->

@endsection