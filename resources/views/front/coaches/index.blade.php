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
                    <th class="product__photo">Logo de la fédération</th>
                    <th class="product__info">Nom du membre du WABC</th>
                    <th class="product__availability">La fédération d'affiliation</th>
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
                      <span class="product__cat">Entraineur</span>
                      <h5 class="product__name"><a href="#">{{$data->nom}}</a></h5>
                    </td>
                    <td class="product__info">
                      <span class="product__cat">Fédération</span>
                      <h5 class="product__name"><a href="#">{{$data->federation}}</a></h5>
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