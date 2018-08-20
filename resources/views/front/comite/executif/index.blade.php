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
         @if( preg_match( '"'. URL::current().'"' , '"'.$org->page.'"') )
         <h2>Organigramme et Structure interne</h2>
          <p>L’organigramme est une représentation schématique des liens fonctionnels, organisationnels et hiérarchiques d’une entreprise. Il sert ainsi à donner une vue d’ensemble de la répartition des postes et fonctions au sein d’une structure. Cette cartographie simplifiée permet de visualiser les différentes relations de commandement ainsi que les rapports de subordination d’où une vision simple et claire des structures complexes.</p>

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

            <div class="table-responsive">
              <table class="table shop-table">
                <thead>
                  <tr>
                    <th class="product__photo">Photo</th>
                    <th class="product__info">Nom du membre du comité</th>
                    <th class="product__desc visible-md visible-lg">Description de son poste</th>
                    <th class="product__availability">Mandat</th>
                  </tr>
                </thead>
                <tbody>

				@foreach($datas as $data)
                  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb">
                        <a href="#"><img src="{{asset('assets/images/'.$logo)}}" alt="" height="100" width="100"></a>
                      </figure>
                    </td>
                    <td class="product__info">
                      <span class="product__cat">Membre du comité</span>
                      <h5 class="product__name"><a href="#">{{$data->noms}}</a></h5>
                    </td>
                    <td class="product__availability">
                      {{strtoupper($data->fonctions)}}
                    </td>
                    <td class="product__availability">
                      {{(($data->enservice==0)? 'MANDAT EN COURS' : 'MANDAT BIENTOT TERMINE')}}
                    </td>
                  </tr>
				@endforeach

                </tbody>
              </table>
            </div>

          </div>
        </div>
        <!-- Wishlist / End -->
      </div>
    </div>

    <!-- Content / End -->

@endsection