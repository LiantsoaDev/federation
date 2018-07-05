@include('front.header-article',['seo' => $seo])

    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="page-heading__title">Article : <span class="highlight">{{$array->categorie}}</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="{{route('home')}}">Accueil</a></li>
              <li class="active">{{ucfirst(strtolower($array->titre))}}</li>
            </ol>
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
          <div class="content col-md-8">

            <!-- Article -->
            <article class="card card--lg post post--single">

              <!-- Slider -->
                <div class="slick posts posts--slider-featured">

                @foreach($images as $img)
                  <div class="posts__item posts__item--category-1">
                    <a href="#" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/uploads/'.$img)}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="post-author">
                          <figure class="post-author__avatar">
                            <img src="{{asset('assets/images/samples/avatar-4.jpg')}}" alt="Post Author Avatar">
                          </figure>
                          <div class="post-author__info">
                            <h4 class="post-author__name">© fédération malagasy du basket-ball</h4>
                            <time datetime="2017-08-28" class="posts__date">{{date('d-m-Y',strtotime($array->date_publication))}}</time>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  @endforeach

                </div>
                <!-- Slider / End -->

              <!-- Post Meta - Side -->
              <div class="post__meta-block post__meta-block--side">
                <!-- Post Author -->
                <div class="post-author">
                  <figure class="post-author__avatar">
                    <img src="{{asset('assets/images/samples/avatar-1.jpg')}}" alt="Post Author Avatar">
                  </figure>
                  <div class="post-author__info">
                    <h4 class="post-author__name">Administrateur</h4>
                    <span class="post-author__slogan">FMBB</span>
                  </div>
                </div>
                <!-- Post Author / End -->

                <!-- Social Sharing -->
                <ul class="social-links social-links--btn">
                  <li class="social-links__item">
                    <a href="#" class="social-links__link social-links__link--fb"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li class="social-links__item">
                    <a href="#" class="social-links__link social-links__link--twitter"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li class="social-links__item">
                    <a href="#" class="social-links__link social-links__link--gplus"><i class="fa fa-google-plus"></i></a>
                  </li>
                </ul>
                <!-- Social Sharing / End -->

                <!-- Post Meta Info -->
                <ul class="post__meta meta">
                  <li class="meta__item meta__item--views">2369</li>
                  <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                  <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                </ul>
                <!-- Post Meta Info / End -->
              </div>
              <!-- Post Meta - Side / End -->

              <div class="card__content">

                <div class="post__category">
                  <span class="label posts__cat-label">The Team</span>
                </div>
                <header class="post__header">
                  <h2 class="post__title">{{$array->titre}}</h2>
                  <ul class="post__meta meta">
                    <li class="meta__item meta__item--date"><time datetime="2017-08-23">{{date('F j, Y',strtotime($array->date_publication))}}</time></li>
                    <li class="meta__item meta__item--views hidden-md hidden-lg">2369</li>
                    <li class="meta__item meta__item--likes hidden-md hidden-lg"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                    <li class="meta__item meta__item--comments hidden-md hidden-lg"><a href="#">18</a></li>
                  </ul>
                </header>

                <div class="post__content">

                  <div class="spacer"></div>

                  <p>{!! htmlspecialchars_decode($array->contenu) !!}</p>

                  <div class="spacer"></div>

                  <figure class="aligncenter">
                    <img src="{{asset('images/uploads/'.$array->firstimage)}}" alt="">
                    <figcaption>Vue spectaculaire depuis le terrain - Crédit Photo: © f.m.b.b</figcaption>
                  </figure>

                  <div class="spacer"></div>

                </div>

                <footer class="post__footer">
                  <div class="post__tags">
                  	@foreach($tags as $tg)
                    <a href="#" class="btn btn-primary btn-outline btn-xs">{{$tg}}</a>
                    @endforeach
                  </div>
                </footer>

              </div>
            </article>
            <!-- Article / End -->

            <!-- Related Posts -->
            <div class="post-related">
              <div class="card">
                <div class="card__header">
                  <h4>Articles Similaires</h4>
                </div>
              </div>
              <div class="row card__content">

              	@foreach($similaire as $simi)
                <div class="col-lg-4 col-md-3 col-xs-12">
                      <ul class="posts posts--simple-list">
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">{{$simi->categorie}}</span>
                            </div>
                            <h6 class="posts__title"><a href="{{route('front.details',[$simi->id,$simi->slug])}}">{{$simi->titre}}</a></h6>
                            <time datetime="2016-08-21" class="posts__date">{{date('F j, Y',strtotime($simi->date_publication))}}</time>
                          </div>
                        </li>
                      </ul>
                    </div>
                @endforeach

              </div>
            </div>
            <!-- Related Posts / End -->


            <!-- Post Comments -->
            <div class="post-comments card card--lg">
              <header class="post-commments__header card__header">
                <h4>Commentaires ({{$commentaires->count}})</h4>
              </header>
              <div class="post-comments__content card__content">

                <ul class="comments">

                  @if( !array_is_empty($commentaires->all) )
                  @foreach($commentaires->all as $comms)
                  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <img src="{{asset('assets/images/samples/avatar-7.jpg')}}" alt="">
                          </figure>
                          <div class="comment__author-info">
                            <h5 class="comment__author-name">{{$comms->name}}</h5>
                            <time class="comment__post-date" datetime="2016-08-23">{{ \Carbon\Carbon::parse($comms->created_at)->diffForHumans() }}</time>
                          </div>
                        </div>
                        <div class="comment__reply">
                          <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                        </div>
                      </header>
                      <div class="comment__body">
                        {!! htmlspecialchars_decode($comms->comments) !!}
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @endif

                  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <img src="{{asset('assets/images/samples/avatar-7.jpg')}}" alt="">
                          </figure>
                          <div class="comment__author-info">
                            <h5 class="comment__author-name">Marina Universe</h5>
                            <time class="comment__post-date" datetime="2016-08-23">5 hours ago</time>
                          </div>
                        </div>
                        <div class="comment__reply">
                          <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                      </div>
                    </div>
                  </li>

                </ul>

              </div>
            </div>
            <!-- Post Comments / End -->


            <!-- Post Comment Form -->
            <div class="post-comment-form card card--lg">
              <header class="post-comment-form__header card__header">
                <h4>Ecrire un commentaire</h4>
              </header>
              <div class="post-comment-form__content card__content">
                <form class="comment-form" id="form1" action="{{route('front.insert.comms')}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$array->id}}">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="input-name">Nom</label>
                        <input type="text" id="input-name" name="name" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="input-email">Email</label>
                        <input type="email" id="input-email" name="email" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="textarea-comment">Votre Commentaire</label>
                    <textarea name="comments" id="textarea-comment" rows="7" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-default btn-block btn-lg">Envoier le Commentaire</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- Post Comment Form / End -->


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
              <a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-youtube"></i>
                </div>
                <h6 class="btn-social-counter__title">S'abonner sur Youtube</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> s'abonner</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
            </aside>
            <!-- Widget: Social Buttons / End -->


            <!-- Widget: Popular News -->
            <aside class="widget widget--sidebar card widget-popular-posts">
              <div class="widget__title card__header">
                <h4>Articles les plus récents</h4>
              </div>
              <div class="widget__content card__content">
                <ul class="posts posts--simple-list">
                  @foreach($articleMois as $rec)
                  <li class="posts__item posts__item--category-{{rand(1,3)}}">
                    <figure class="posts__thumb">
                      <a href="#"><img src="{{asset('images/uploads/'.$rec->firstimage)}}" width="70" alt=""></a>
                    </figure>
                    <div class="posts__inner">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">{{$rec->categorie}}</span>
                      </div>
                      <h6 class="posts__title"><a href="#">{{$rec->titre}}</a></h6>
                      <time datetime="2016-08-23" class="posts__date">{{date('F j, Y',strtotime($array->date_publication))}}</time>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </aside>
            <!-- Widget: Popular News / End -->


            <!-- Widget: Tag Cloud -->
            <aside class="widget widget--sidebar card widget-tagcloud">
              <div class="widget__title card__header">
                <h4>Listes des tags</h4>
              </div>
              <div class="widget__content card__content">
                <div class="tagcloud">
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYOFFS</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">ALCHEMISTS</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INJURIES</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">TEAM</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INCORPORATIONS</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">UNIFORMS</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">CHAMPIONS</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PROFESSIONAL</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">COACH</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">STADIUM</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">NEWS</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYERS</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">WOMEN DIVISION</a>
                  <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">AWARDS</a>
                </div>
              </div>
            </aside>
            <!-- Widget: Tag Cloud / End -->


            <!-- Widget: Banner -->
            <aside class="widget card widget--sidebar widget-banner">
              <div class="widget__title card__header">
                <h4>Advertisement</h4>
              </div>
              <div class="widget__content card__content">
                <figure class="widget-banner__img">
                  <a href="../../marketplace.envato.com/index2d78.html?ref=dan_fisher"><img src="{{asset('assets/images/samples/banner.jpg')}}" alt="Banner"></a>
                </figure>
              </div>
            </aside>
            <!-- Widget: Banner / End -->


            <!-- Widget: Trending News -->
            <aside class="widget widget--sidebar card widget-tabbed {{$options}}">
              <div class="widget__title card__header">
                <h4>Top Trending News</h4>
              </div>
              <div class="widget__content card__content">
                <div class="widget-tabbed__tabs">
                  <!-- Widget Tabs -->
                  <ul class="nav nav-tabs nav-justified widget-tabbed__nav" role="tablist">
                    <li role="presentation" class="active"><a href="#widget-tabbed-newest" aria-controls="widget-tabbed-newest" role="tab" data-toggle="tab">Newest</a></li>
                    <li role="presentation"><a href="#widget-tabbed-commented" aria-controls="widget-tabbed-commented" role="tab" data-toggle="tab">Most Commented</a></li>
                    <li role="presentation"><a href="#widget-tabbed-popular" aria-controls="widget-tabbed-popular" role="tab" data-toggle="tab">Popular</a></li>
                  </ul>

                  <!-- Widget Tab panes -->
                  <div class="tab-content widget-tabbed__tab-content">
                    <!-- Newest -->
                    <div role="tabpanel" class="tab-pane fade in active" id="widget-tabbed-newest">
                      <ul class="posts posts--simple-list">
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-3">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">Playoffs</span>
                            </div>
                            <h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- Commented -->
                    <div role="tabpanel" class="tab-pane fade" id="widget-tabbed-commented">
                      <ul class="posts posts--simple-list">
                        <li class="posts__item posts__item--category-3">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">Playoffs</span>
                            </div>
                            <h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- Popular -->
                    <div role="tabpanel" class="tab-pane fade" id="widget-tabbed-popular">
                      <ul class="posts posts--simple-list">
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-3">
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">Playoffs</span>
                            </div>
                            <h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                            <div class="posts__excerpt">
                              Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </aside>
            <!-- Widget: Trending News / End -->


            <!-- Widget: Match Announcement -->
            <aside class="widget widget--sidebar card widget-preview">
              <div class="widget__title card__header">
                <h4>Top Next Match</h4>
              </div>
              <div class="widget__content card__content">

                <!-- Match Preview -->
                <div class="match-preview">
                  <section class="match-preview__body">
                    <header class="match-preview__header">
                      <h3 class="match-preview__title">Championship Quarter Finals</h3>
                      <time class="match-preview__date" datetime="2017-05-17">Saturday, May 17th, 2017</time>
                    </header>
                    <div class="match-preview__content">

                      <!-- 1st Team -->
                      <div class="match-preview__team match-preview__team--first">
                        <figure class="match-preview__team-logo">
                          <img src="assets/images/samples/logo-alchemists--sm.png" alt="">
                        </figure>
                        <h5 class="match-preview__team-name">Alchemists</h5>
                        <div class="match-preview__team-info">Elric Bros School</div>
                      </div>
                      <!-- 1st Team / End -->

                      <div class="match-preview__vs">
                        <div class="match-preview__conj">VS</div>
                        <div class="match-preview__match-info">
                          <time class="match-preview__match-time" datetime="2017-05-17 09:00">9:00 PM</time>
                          <div class="match-preview__match-place">Madison Cube Stadium</div>
                        </div>
                      </div>

                      <!-- 2nd Team -->
                      <div class="match-preview__team match-preview__team--second">
                        <figure class="match-preview__team-logo">
                          <img src="assets/images/samples/logo-l-clovers--sm.png" alt="">
                        </figure>
                        <h5 class="match-preview__team-name">Clovers</h5>
                        <div class="match-preview__team-info">ST Paddy's Institute</div>
                      </div>
                      <!-- 2nd Team / End -->

                    </div>
                    <div class="match-preview__action">
                      <a href="#" class="btn btn-default btn-block">Buy Tickets Now</a>
                    </div>
                  </section>
                  <section class="match-preview__countdown countdown">
                    <h4 class="countdown__title">Game Countdown</h4>
                    <div class="countdown__content">
                      <div class="countdown-counter" data-date="May 12, 2017 12:00:00"></div>
                    </div>
                  </section>
                </div>
                <!-- Match Preview / End -->

              </div>
            </aside>
            <!-- Widget: Match Announcement / End -->


            <!-- Widget: Newsletter -->
            <aside class="widget widget--sidebar card widget-newsletter">
              <div class="widget__title card__header">
                <h4>Our Newsletter</h4>
              </div>
              <div class="widget__content card__content">
                <h5 class="widget-newsletter__subtitle">Subscribe Now!</h5>
                <div class="widget-newsletter__desc">
                  <p>Receive the latest news from the team: game reminders, new adquisitions and professional match results.</p>
                </div>
                <form action="#" id="newsletter" class="inline-form">
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="Your email address...">
                    <span class="input-group-btn">
                      <button class="btn btn-lg btn-default" type="button">Send</button>
                    </span>
                  </div>
                </form>
              </div>
            </aside>
            <!-- Widget: Newsletter / End -->

          </div>
          <!-- Sidebar / End -->
        </div>

      </div>
    </div>

    <!-- Content / End -->

@include('front.footer')
