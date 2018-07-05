
    <!-- Hero Unit
    ================================================== -->
    <div class="hero-unit" style="background:#27313b url({{asset('/images/uploads/'.$landing->urlimage)}}) 50% 0 no-repeat;background-size:cover;">
      <div class="container hero-unit__container">
        <div class="hero-unit__content hero-unit__content--left-center">
          <span class="hero-unit__decor">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
          </span>
          {!! htmlspecialchars_decode($landing->code) !!}
          <div class="hero-unit__desc">Promotion et developpement du basketball à Madagascar . </div>
          <a href="{{route('front.presentation.fmbb')}}" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed hero-unit__btn">En savoir plus <i class="fa fa-plus text-primary"></i></a>
        </div>

        <figure class="hero-unit__img">
          <img src="{{asset('assets/images/samples/uploads/'.$premierplan->urlimages)}}" alt="Hero Unit Image">
        </figure>
      </div>
    </div>


    <!-- Header Featured News
    ================================================== -->
    <div class="posts posts--carousel-featured featured-carousel">

      <div class="posts__item posts__item--category-1">
        <a href="#" class="posts__link-wrapper">
          <figure class="posts__thumb">
            <img src="{{asset('assets/images/samples/featured-carousel-2.jpg')}}" alt="">
          </figure>
          <div class="posts__inner">
            <h3 class="posts__title">Espace reservé pour la publicité</h3>
          </div>
        </a>
      </div>

      <div class="posts__item posts__item--category-1">
        <a href="#" class="posts__link-wrapper">
          <figure class="posts__thumb">
            <img src="{{asset('assets/images/samples/featured-carousel-3.jpg')}}" alt="">
          </figure>
          <div class="posts__inner">
            <h3 class="posts__title">Espace reservé pour la publicité</h3>
          </div>
        </a>
      </div>

      <div class="posts__item posts__item--category-1">
        <a href="#" class="posts__link-wrapper">
          <figure class="posts__thumb">
            <img src="{{asset('assets/images/samples/featured-carousel-1.jpg')}}" alt="">
          </figure>
          <div class="posts__inner">
            <h3 class="posts__title">Espace reservé pour la publicité</h3>
          </div>
        </a>
      </div>

      <div class="posts__item posts__item--category-1">
        <a href="#" class="posts__link-wrapper">
          <figure class="posts__thumb">
            <img src="{{asset('assets/images/samples/featured-carousel-2.jpg')}}" alt="">
          </figure>
          <div class="posts__inner">
            <h3 class="posts__title">Espace reservé pour la publicité</h3>
          </div>
        </a>
      </div>

      <div class="posts__item posts__item--category-1">
        <a href="#" class="posts__link-wrapper">
          <figure class="posts__thumb">
            <img src="{{asset('assets/images/samples/featured-carousel-1.jpg')}}" alt="">
          </figure>
          <div class="posts__inner">
            <h3 class="posts__title">Espace reservé pour la publicité</h3>
          </div>
        </a>
      </div>

    </div>
