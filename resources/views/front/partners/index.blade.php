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
              <li class="active">{{$contenu}}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

<!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <!-- Icoboxes -->
        <h3>Les partenaires officiels de la fédération Malagasy du basket-ball</h3>
		
		@php
		$n = count($partenaire);
		$line = ceil($n/3);
		$b = 0;
		@endphp

        @for($i=0; $i<$line; $i++)

        <div class="row">
		
		@for($a=$b; $a<3; $a++)
		@php
			if( $i%2 != 0) $class = 'filled';
			else $class = 'border';
		@endphp
		@if( !empty($partenaire[$a]))
          <div class="col-md-4">
            <!-- Icobox -->
            <div class="icobox icobox--center">
              <figure>
                <img src="{{asset('/images/partners/'.$partenaire[$a]->icone)}}" alt="" width="250" height="250">
              </figure>
              <br>
              <div class="icobox__content">
                <h4 class="icobox__title icobox__title--lg">{{$partenaire[$a]->titre}}</h4>
                <div class="icobox__description">
                  {{$partenaire[$a]->description}}
                </div>
              </div>
            </div>
            <!-- Icobox / End -->
          </div>
          @endif
        @endfor

        </div>
        <div class="spacer-lg"></div>

        @endfor

        <!-- Icoboxes / End -->

        <div class="spacer-xxlg"></div>

      </div>
    </div>

    <!-- Content / End -->


@endsection