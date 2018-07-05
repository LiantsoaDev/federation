@extends('front.layouts.app')


@section('content')
<!-- Page Heading
    ================================================== -->
    <div class="page-heading page-heading--overlay page-heading--post-bg" style="background-image: url('{{asset("assets/images/samples/single-post-img5.jpg")}}') ">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <!-- Post Meta - Top -->
            <div class="post__meta-block post__meta-block--top">

              <!-- Post Category -->
              <div class="post__category">
                <span class="label posts__cat-label">FMBB</span>
              </div>
              <!-- Post Category / End -->

              <!-- Post Title -->
              <h1 class="page-heading__title">{{$titre}}</h1>
              <!-- Post Title / End -->

              <!-- Post Meta Info -->
              <ul class="post__meta meta">
                <li class="meta__item meta__item--date"><time datetime="2017-08-23">{{date('d-m-Y',strtotime($time))}}</time></li>
                <li class="meta__item meta__item--views">2369</li>
                <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
              </ul>
              <!-- Post Meta Info / End -->

              <!-- Post Author -->
              <div class="post-author">
                <figure class="post-author__avatar">
                  <img src="{{asset('assets/images/samples/avatar-1.jpg')}}" alt="Post Author Avatar">
                </figure>
                <div class="post-author__info">
                  <h4 class="post-author__name">Administrateur</h4>
                  <span class="post-author__slogan">Fédération Malagasy du Basketball</span>
                </div>
              </div>
              <!-- Post Author / End -->

            </div>
            <!-- Post Meta - Top / End -->
          </div>
        </div>
      </div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8 col-md-offset-2">

            <!-- Article -->
            <article class="card card--lg post post--single post--extra-top">
              <div class="card__content">
				
				<div class="spacer"></div>

                <div class="post__content">
                  <p>{!! $contenu !!}</p>
				
                  <div class="spacer"></div>
				
				@if( !empty($video ))
				 <div class="lightbox-holder">
                    <a href="https://www.youtube.com/watch?v=XE0fU9PCrWE" class="lightbox-holder__link mp_iframe">
                      <img src="{{asset('assets/images/samples/single-post-img6.jpg')}}" alt="">
                      <div class="lightbox-holder__overlay lightbox-holder__overlay--video">
                        <h3>Check The Alchemists in action in this exclusive clip from last night</h3>
                        <time datetime="2016-08-23">August 23rd, 2016</time>
                      </div>
                    </a>
                  </div>
				@endif	
		
				<div class="spacer"></div>

                </div>
                <footer class="post__footer">
                  <div class="post__tags">
                  	@if( !empty($tags))
                  	@foreach(explode(',', $tags) as $value )
                    <a href="#" class="btn btn-primary btn-outline btn-xs">{{$value}}</a>
                    @endforeach
                    @endif
                  </div>
                </footer>
                
              </div>
            </article>
            <!-- Article / End -->

            <!-- Post Sharing Buttons -->
            <div class="post-sharing">
              <a href="#" class="btn btn-default btn-facebook btn-icon btn-block"><i class="fa fa-facebook"></i> <span class="post-sharing__label hidden-xs">Share on Facebook</span></a>
              <a href="#" class="btn btn-default btn-twitter btn-icon btn-block"><i class="fa fa-twitter"></i> <span class="post-sharing__label hidden-xs">Share on Twitter</span></a>
              <a href="#" class="btn btn-default btn-gplus btn-icon btn-block"><i class="fa fa-google-plus"></i> <span class="post-sharing__label hidden-xs">Share on Google+</span></a>
            </div>
            <!-- Post Sharing Buttons / End -->
            

            <!-- Related Posts -->
            <div class="post-related row">
              <div class="col-xs-6">
                <!-- Prev Post -->
                <div class="card post-related__prev">
                  <div class="card__content">
            
                    <!-- Prev Post Links -->
                    <a href="#" class="btn-nav">
                      <i class="fa fa-chevron-left"></i>
                    </a>
                    <!-- Prev Post Links / End -->
            
                    <ul class="posts posts--simple-list">
                      <li class="posts__item posts__item--category-1">
                        <div class="posts__inner">
                          <div class="posts__cat">
                            <span class="label posts__cat-label">FMBB</span>
                          </div>
                          <h6 class="posts__title"><a href="#">Historique</a></h6>
                          <time datetime="2016-08-23" class="posts__date">{{date('M Y',strtotime($time))}}</time>
                        </div>
                      </li>
                    </ul>
            
                  </div>
                </div>
                <!-- Prev Post / End -->
              </div>
              <div class="col-xs-6">
                <div class="card post-related__next">
                  <!-- Next Post -->
                  <div class="card__content">
            
                    <ul class="posts posts--simple-list">
                      <li class="posts__item posts__item--category-1">
                        <div class="posts__inner">
                          <div class="posts__cat">
                            <span class="label posts__cat-label">FMBB</span>
                          </div>
                          <h6 class="posts__title"><a href="#">Missions et Attributions</a></h6>
                          <time datetime="2016-08-23" class="posts__date">{{date('M Y',strtotime($time))}}</time>
                        </div>
                      </li>
                    </ul>
            
                    <!-- Next Post Link -->
                    <a href="#" class="btn-nav">
                      <i class="fa fa-chevron-right"></i>
                    </a>
                    <!-- Next Post Link / End -->
            
                  </div>
                  <!-- Next Post / End -->
                </div>
              </div>
            </div>
            <!-- Related Posts / End -->
            
            
            

          </div>
          <!-- Content / End -->

        </div>

      </div>
    </div>

    <!-- Content / End -->
@endsection