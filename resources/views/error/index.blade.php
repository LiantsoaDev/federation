@extends('front.layouts.app')

@section('content')

  <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <!-- Error 404 -->
        <div class="error-404">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <figure class="error-404__figure">
                <img src="{{asset('assets/images/icon-ghost.svg')}}" alt="">
              </figure>
              <header class="error__header">
                <h2 class="error__title">OUPS! Le site est en cours de construction</h2>
                <h3 class="error__subtitle">Nous avons rencontré un problème !</h3>
              </header>
              <div class="error__description">
                Pas de panique ! Le site est encore en cours de construction. Ce problème sera résolu dans peu de temps. Merci de revisiter ultérieurment <a href="https://www.facebook.com/OktoboneTechnology/">Oktobone Technology</a>
              </div>
              <footer class="error__cta">
                <a href="{{route('home')}}" class="btn btn-primary">Retourner à l'Accueil</a>
                <a href="javascript:history.back()" class="btn btn-primary-inverse">Revenir à la page précédente</a>
              </footer>
            </div>
          </div>
        </div>
        <!-- Error 404 / End -->

      </div>
    </div>

@endsection