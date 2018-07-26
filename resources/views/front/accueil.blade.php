@include('front.header')

    <!-- Landing Page -->
    @include('front.includes.landingpage')


    <div class="site-content">
      <div class="container">

        <div class="row">

          <div class="content col-md-8">

            <!-- Featured News -->
            <div class="card card--clean">
              <header class="card__header card__header--has-filter">
                <h4>A la une</h4>
              </header>
              <div class="card__content">

                <!-- Slider -->
                <div class="slick posts posts--slider-featured">

                  @foreach($unes as $u)

                  <div class="posts__item posts__item--category-1">
                    <a href="{{route('front.details',[$u->id,$u->slug])}}" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/uploads/'.$u->firstimage)}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="posts__cat">
                          <span class="label posts__cat-label">{{$u->categorie}}</span>
                        </div>
                        <h3 class="posts__title">{{$u->titre}}</h3>
                        <div class="post-author">
                          <div class="post-author__info">
                            <h4 class="post-author__name">fédération Malagasy du BasketBall</h4>
                            <time datetime="2017-08-28" class="posts__date">Publié le {{date('d-m-Y',strtotime($u->date_publication))}}</time>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  @endforeach

                </div>
                <!-- Slider / End -->

            </div>
          </div>

          <!-- Post Area 3 -->
         <div class="card">
           <div class="card__content">
             <ul class="posts posts--simple-list posts--horizontal">
               @foreach($unes as $une)
               <li class="posts__item posts__item--category-{{rand(1,2)}}">
                 <div class="posts__inner">
                   <div class="posts__cat">
                     <span class="label posts__cat-label">{{$une->categorie}}</span>
                   </div>
                   <h6 class="posts__title"><a href="{{route('front.details',[$une->id,$une->slug])}}">{{$une->titre}}</a></h6>
                   <time datetime="2017-08-23" class="posts__date">{{date('F j, Y',strtotime($une->date_publication))}}</time>
                 </div> 
               </li>
               @endforeach
             </ul>
           </div>
         </div>
         <!-- Post Area 3 / End -->

         <div class="card card--clean">
           <header class="card__header card__header--has-btn">
             <h4>Actualités récentes</h4>
             <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Voir tous les posts</a>
           </header>

           @foreach($allarticles as $articles)
           <aside class="widget widget--sidebar card widget-featured">
             <!-- <div class="widget__title card__header">
               <h4>Breaking News</h4>
             </div> -->
             <div class="widget__content card__content">
               <ul class="posts posts--simple-list">
                 <li class="posts__item posts__item--category-1">
                   <figure class="posts__thumb">
                     <a href="{{route('front.details',[$articles->id,$articles->slug])}}"><img src="{{asset('images/uploads/'.$articles->firstimage)}}" height=130px width=130px alt=""></a>
                   </figure>
                   <div class="posts__inner">
                     <div class="posts__cat">
                       <span class="label posts__cat-label">{{$articles->categorie}}</span>
                     </div>
                     <h6 class="posts__title"><a href="{{route('front.details',[$articles->id,$articles->slug])}}">{{$articles->titre}}</a></h6>
                   </div>
                   <div class="posts__excerpt posts__excerpt--space">
                     {!! htmlspecialchars_decode($articles->contenu) !!}
                   </div>
                   <footer class="posts__footer card__footer">
                     <div class="post-author">
                       <div class="post-author__info">
                         <h4 class="post-author__name">{{date('d/m/Y',strtotime($articles->date_publication))}}</h4>
                       </div>
                     </div>
                     <ul class="post__meta meta">
                       <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                       <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                     </ul>
                   </footer>
                 </li>
               </ul>
             </div>
           </aside>
           @endforeach

           <!-- pagination -->
          <nav aria-label="Comments Pavigation" class="post__comments-pagination">
           {{$allarticles->links()}}
          </nav>
           <!-- end pagination -->

           <aside class="widget widget--sidebar card widget-featured">
             <!-- <div class="widget__title card__header">
               <h4>Breaking News</h4>
             </div> -->
             <div class="widget__content card__content">
               <ul class="posts posts--simple-list">
                 <li class="posts__item posts__item--category-1">
                   <figure class="posts__thumb">
                     <a href="#"><img src="{{asset('images/event-1513671848.jpg')}}" height=130px width=130px alt=""></a>
                   </figure>
                   <div class="posts__inner">
                     <div class="posts__cat">
                       <span class="label posts__cat-label">The Team</span>
                     </div>
                     <h6 class="posts__title"><a href="#">The Alchemists just won their Final Game and became Champions!</a></h6>
                   </div>
                   <div class="posts__excerpt posts__excerpt--space">
                     Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   </div>
                   <footer class="posts__footer card__footer">
                     <div class="post-author">
                       <div class="post-author__info">
                         <h4 class="post-author__name">24/05/2018</h4>
                       </div>
                     </div>
                     <ul class="post__meta meta">
                       <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                       <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                     </ul>
                   </footer>
                 </li>
               </ul>
             </div>
           </aside>

         </div>
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
              <a href="#" class="btn-social-counter btn-social-counter--gplus" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-youtube"></i>
                </div>
                <h6 class="btn-social-counter__title">S'abonner sur Youtube</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> s'abonner</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
            </aside>

            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmadagascarbasketball%2F&tabs=timeline&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

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

        <!-- Video Slideshow -->
        <div class="card card--clean">
          <header class="card__header card__header--has-filter">
            <h4>Playlist Video</h4>
            <ul class="category-filter category-filter--carousel category-filter--extra-space">
              <li class="category-filter__item"><a href="#" class="category-filter__link category-filter__link--reset category-filter__link--active">All</a></li>
              <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-1">The Team</a></li>
              <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-3">Playoffs</a></li>
              <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-2">Injuries</a></li>
            </ul>
          </header>
          <div class="card__content">

            <!-- Carousel -->
            <div class="slick posts posts--carousel video-carousel">

              @foreach($videos as $v)
              <div class="posts__item posts__item--category-{{rand(1,3)}}">
                {!! $v->lienvideo !!}
                  <figure class="posts__thumb hide">
                    <img src="{{asset('assets/images/samples/video-slide1.jpg')}}" alt="">
                  </figure>
                  <div class="posts__inner">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">Video publiée sur {{$v->typevideo}}</span>
                    </div>
                    <h3 class="posts__title">Cheerleader tryouts will start next Friday at 5pm</h3>
                    <time datetime="2017-08-28" class="posts__date">August 28th, 2017</time>
                  </div>
                </a>
              </div>
              @endforeach

            </div>
            <!-- Carousel / End -->

          </div>
        </div>
        <!-- Video Slideshow / End -->

      </div>
  </div>

    <!-- Content / End -->

@include('front.footer')
