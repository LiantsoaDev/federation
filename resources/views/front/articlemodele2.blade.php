@include('front.header-article')

    
    <!-- Pushy Panel -->
    <aside class="pushy-panel">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.html"><img src="{{asset('assets/images/logo-fmbb.png')}}" srcset="{{asset('assets/images/logo-fmbb.png')}} 2x" alt="Alchemists"></a>
          </div>
        </header>
        <div class="pushy-panel__content">
    
          <!-- Widget: Posts -->
          <aside class="widget widget--side-panel">
            <div class="widget__content">
              <ul class="posts posts--simple-list posts--simple-list--lg">
                @foreach($similaire as $simil)
                <li class="posts__item posts__item--category-1">
                  <div class="posts__inner">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">{{$simil->categorie}}</span>
                    </div>
                    <h6 class="posts__title"><a href="#">{{$simil->titre}}</a></h6>
                    <time datetime="2017-08-23" class="posts__date">{{date('F j, Y',strtotime($simil->date_publication))}}</time>
                    <div class="posts__excerpt">
                      {!! htmlspecialchars_decode($simil->contenu) !!}
                    </div>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="{{link_img('assets/images/samples/avatar-1.jpg')}}" alt="Administrateur fmbb">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Administrateur</h4>
                      </div>
                    </div>
                    <ul class="post__meta meta">
                      <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                      <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                    </ul>
                  </footer>
                </li>
                @endforeach
              </ul>
            </div>
          </aside>
          <!-- Widget: Posts / End -->
    
          <!-- Widget: Tag Cloud -->
          <aside class="widget widget--side-panel widget-tagcloud">
            <div class="widget__title">
              <h4>Listes des Tags</h4>
            </div>
            <div class="widget__content">
              <div class="tagcloud">
                @foreach($tags as $tag)
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">{{ strtoupper($tag) }}</a>
                @endforeach
              </div>
            </div>
          </aside>
          <!-- Widget: Tag Cloud / End -->
    
          <!-- Widget: Banner -->
          <aside class="widget widget--side-panel widget-banner">
            <div class="widget__content">
              <figure class="widget-banner__img">
                <a href="{{route('home')}}"><img src="{{link_img('assets/images/samples/banner.jpg')}}" alt="Banner"></a>
              </figure>
            </div>
          </aside>
          <!-- Widget: Banner / End -->
    
        </div>
        <a href="#" class="pushy-panel__back-btn"></a>
      </div>
    </aside>
    <!-- Pushy Panel / End -->

    <!-- Page Heading
    ================================================== -->
    <div class="page-heading page-heading--overlay page-heading--post-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <!-- Post Meta - Top -->
            <div class="post__meta-block post__meta-block--top">

              <!-- Post Category -->
              <div class="post__category">
                <span class="label posts__cat-label">{{$array->categorie}}</span>
              </div>
              <!-- Post Category / End -->

              <!-- Post Title -->
              <h1 class="page-heading__title">{{$array->titre}}</h1>
              <!-- Post Title / End -->

              <!-- Post Meta Info -->
              <ul class="post__meta meta">
                <li class="meta__item meta__item--date"><time datetime="2017-08-23">{{date('F j, Y',strtotime($array->date_publication))}}</time></li>
                <li class="meta__item meta__item--views">2369</li>
                <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
              </ul>
              <!-- Post Meta Info / End -->

              <!-- Post Author -->
              <div class="post-author">
                <figure class="post-author__avatar">
                  <img src="{{asset('assets/images/logo-fmbb.png')}}" alt="Administrateur">
                </figure>
                <div class="post-author__info">
                  <h4 class="post-author__name">Fédération Malagasy du Basketball</h4>
                  <span class="post-author__slogan">Administrateur</span>
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

                <div class="post__content">
                  <p>{!! htmlspecialchars_decode($array->contenu) !!}</p>

                  <div class="spacer"></div>

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

                  <div class="spacer"></div>

                  <div class="row {{$options}}">
                    <div class="col-md-6">
                      <h4>Ordered List</h4>
                      <ol class="list">
                        <li>Sed ut perspiciatis unde omnis iste natus.</li>
                        <li>Error sit voluptatem accusantium.</li>
                        <li>Doloremque laudantium, totam rem.</li>
                        <li>Eaque ipsa quae ab illo inventore veritatis.</li>
                        <li>Velit esse quam nihil molestiae conse.</li>
                        <li>Vel illum qui dolorem eum fugiat quo.</li>
                        <li>Voluptas nulla pariatur?</li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <h4>Unordered List</h4>
                      <ul class="list">
                        <li>Sed ut perspiciatis unde omnis iste natus.</li>
                        <li>Error sit voluptatem accusantium.</li>
                        <li>Doloremque laudantium, totam rem.</li>
                        <li>Eaque ipsa quae ab illo inventore veritatis.</li>
                        <li>Velit esse quam nihil molestiae conse.</li>
                        <li>Vel illum qui dolorem eum fugiat quo.</li>
                        <li>Voluptas nulla pariatur?</li>
                      </ul>
                    </div>
                  </div>

                  <div class="spacer"></div>

                </div>
                <footer class="post__footer">
                  <div class="post__tags">
                    @foreach($tags as $tag)
                    <a href="#" class="btn btn-primary btn-outline btn-xs">{{ strtoupper($tag) }}</a>
                    @endforeach
                  </div>
                </footer>
                
              </div>
            </article>
            <!-- Article / End -->

            <!-- Game Scoreboard -->
            <div class="card {{$options}}">
              <header class="card__header card__header--has-btn">
                <h4>Score du dernier match</h4>
                <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Check previous Results</a>
              </header>
              <div class="card__content">
            
                <!-- Game Result -->
                <div class="game-result">
                  <section class="game-result__section">
                    <header class="game-result__header">
                      <h3 class="game-result__title">Championship Quarter Finals</h3>
                      <time class="game-result__date" datetime="2017-03-17">Saturday, March 17th, 2017</time>
                    </header>
                    <div class="game-result__content">
            
                      <!-- 1st Team -->
                      <div class="game-result__team game-result__team--first">
                        <figure class="game-result__team-logo">
                          <img src="assets/images/samples/logo-alchemists--sm.png" alt="">
                        </figure>
                        <div class="game-result__team-info">
                          <h5 class="game-result__team-name">Alchemists</h5>
                          <div class="game-result__team-desc">Elric Bros School</div>
                        </div>
                      </div>
                      <!-- 1st Team / End -->
            
                      <div class="game-result__score-wrap">
                        <div class="game-result__score">
                          <span class="game-result__score-result game-result__score-result--winner">107</span> <span class="game-result__score-dash">-</span> <span class="game-result__score-result game-result__score-result--loser">102</span>
                        </div>
                        <div class="game-result__score-label">Final Score</div>
                      </div>
            
                      <!-- 2nd Team -->
                      <div class="game-result__team game-result__team--second">
                        <figure class="game-result__team-logo">
                          <img src="assets/images/samples/logo-sharks--sm.png" alt="">
                        </figure>
                        <div class="game-result__team-info">
                          <h5 class="game-result__team-name">Sharks</h5>
                          <div class="game-result__team-desc">Marine College</div>
                        </div>
                      </div>
                      <!-- 2nd Team / End -->
                    </div>
            
                    <div class="game-result__stats">
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-push-3 game-result__stats-scoreboard">
                          <div class="game-result__table-stats">
                            <div class="table-responsive">
                              <table class="table table__cell-center table-wrap-bordered table-thead-color">
                                <thead>
                                  <tr>
                                    <th>Scoreboard</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>T</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>Alchemists</th>
                                    <td>30</td>
                                    <td>31</td>
                                    <td>22</td>
                                    <td>24</td>
                                    <td>107</td>
                                  </tr>
                                  <tr>
                                    <th>Sharks</th>
                                    <td>22</td>
                                    <td>34</td>
                                    <td>20</td>
                                    <td>26</td>
                                    <td>102</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-3 col-md-pull-6 game-result__stats-team-1">
            
                          <!-- Progress: Assists -->
                          <div class="progress-stats">
                            <div class="progress__label">ASS</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar-width-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">22</div>
                          </div>
                          <!-- Progress: Assists / End -->
            
                          <!-- Progress: Rebounds -->
                          <div class="progress-stats">
                            <div class="progress__label">Reb</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar-width-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">35</div>
                          </div>
                          <!-- Progress: Rebounds / End -->
            
                          <!-- Progress: Steals -->
                          <div class="progress-stats">
                            <div class="progress__label">STE</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar-width-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">14</div>
                          </div>
                          <!-- Progress: Steals / End -->
            
                          <!-- Progress: Blocks -->
                          <div class="progress-stats">
                            <div class="progress__label">BLK</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">26</div>
                          </div>
                          <!-- Progress: Blocks / End -->
            
                          <!-- Progress: Fouls -->
                          <div class="progress-stats">
                            <div class="progress__label">FOU</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar-width-70" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">18</div>
                          </div>
                          <!-- Progress: Fouls / End -->
            
                        </div>
                        <div class="col-xs-6 col-md-3 game-result__stats-team-2">
                          <!-- Progress: Assists -->
                          <div class="progress-stats">
                            <div class="progress__label">ASS</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar--info progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">36</div>
                          </div>
                          <!-- Progress: Assists / End -->
            
                          <!-- Progress: Rebounds -->
                          <div class="progress-stats">
                            <div class="progress__label">Reb</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar--info progress__bar-width-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">18</div>
                          </div>
                          <!-- Progress: Rebounds / End -->
            
                          <!-- Progress: Steals -->
                          <div class="progress-stats">
                            <div class="progress__label">STE</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar--info progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">24</div>
                          </div>
                          <!-- Progress: Steals / End -->
            
                          <!-- Progress: Blocks -->
                          <div class="progress-stats">
                            <div class="progress__label">BLK</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar--info progress__bar-width-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">23</div>
                          </div>
                          <!-- Progress: Blocks / End -->
            
                          <!-- Progress: Fouls -->
                          <div class="progress-stats">
                            <div class="progress__label">FOU</div>
                            <div class="progress">
                              <div class="progress__bar progress__bar--info progress__bar-width-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress__number">14</div>
                          </div>
                          <!-- Progress: Fouls / End -->
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="game-result__section">
                    <header class="game-result__subheader card__subheader">
                      <h5 class="game-result__subtitle">Game Statistics</h5>
                    </header>
                    <div class="game-result__content mb-0">
                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <div class="row">
                            <div class="col-xs-4">
                              <div class="circular">
                                <div class="circular__bar" data-percent="88">
                                  <span class="circular__percents">88<small>%</small></span>
                                </div>
                                <span class="circular__label">Shot<br> Accuracy</span>
                              </div>
                            </div>
                            <div class="col-xs-4">
                              <div class="circular">
                                <div class="circular__bar" data-percent="63">
                                  <span class="circular__percents">63<small>%</small></span>
                                </div>
                                <span class="circular__label">Pass<br> Accuracy</span>
                              </div>
                            </div>
                            <div class="col-xs-4">
                              <div class="circular">
                                <div class="circular__bar" data-percent="75.5">
                                  <span class="circular__percents">75.5<small>%</small></span>
                                </div>
                                <span class="circular__label">Total<br> Efficiency</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <div class="row">
                            <div class="col-xs-4 col-xs-push-8 col-md-push-0">
                              <div class="circular">
                                <div class="circular__bar" data-percent="72.5" data-bar-color="#0cb2e2">
                                  <span class="circular__percents">72.5<small>%</small></span>
                                </div>
                                <span class="circular__label">Total<br> Efficiency</span>
                              </div>
                            </div>
                            <div class="col-xs-4">
                              <div class="circular">
                                <div class="circular__bar" data-percent="53" data-bar-color="#0cb2e2">
                                  <span class="circular__percents">53<small>%</small></span>
                                </div>
                                <span class="circular__label">Pass<br> Accuracy</span>
                              </div>
                            </div>
                            <div class="col-xs-4 col-xs-pull-8 col-md-pull-0">
                              <div class="circular">
                                <div class="circular__bar" data-percent="92" data-bar-color="#0cb2e2">
                                  <span class="circular__percents">92<small>%</small></span>
                                </div>
                                <span class="circular__label">Shot<br> Accuracy</span>
                              </div>
                            </div>
                          </div>
            
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <!-- Game Result / End -->
            
              </div>
            </div>
            <!-- Game Scoreboard / End -->
            

            <!-- Post Sharing Buttons -->
            <div class="post-sharing">
              <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode($seo->twitterUrl)}}" class="btn btn-default btn-facebook btn-icon btn-block" target="_blank"><i class="fa fa-facebook"></i> <span class="post-sharing__label hidden-xs">Partager sur Facebook</span></a>
              <a href="https://twitter.com/intent/tweet/?url={{urlencode($seo->twitterUrl)}}&text={{$seo->description}}" class="btn btn-default btn-twitter btn-icon btn-block" target="_blank"><i class="fa fa-twitter"></i> <span class="post-sharing__label hidden-xs">Partager sur Twitter</span></a>
              <a href="https://plus.google.com/share?url={{$seo->twitterUrl}}" class="btn btn-default btn-gplus btn-icon btn-block" target="_blank"><i class="fa fa-google-plus"></i> <span class="post-sharing__label hidden-xs">Partage sur Google+</span></a>
            </div>
            <!-- Post Sharing Buttons / End -->
            

            <!-- Related Posts -->
            <div class="post-related row">
              @foreach($similaire as $simi)
              <div class="col-xs-6">
                <!-- Prev Post -->
                <div class="card post-related__prev">
                  <div class="card__content">
            
                    <ul class="posts posts--simple-list">
                      <li class="posts__item posts__item--category-1">
                        <div class="posts__inner">
                          <div class="posts__cat">
                            <span class="label posts__cat-label">{{$simi->categorie}}</span>
                          </div>
                          <h6 class="posts__title"><a href="#">{{$simi->titre}}</a></h6>
                          <time datetime="2016-08-23" class="posts__date">{{date('F j, Y',strtotime($simil->date_publication))}}</time>
                        </div>
                      </li>
                    </ul>
            
                  </div>
                </div>
                <!-- Prev Post / End -->
              </div>
              @endforeach
            </div>
            <!-- Related Posts / End -->
            

            <!-- Post Comments -->
            <div class="post-comments card card--lg">
              <header class="post-commments__header card__header">
                <h4>Comments (18)</h4>
              </header>
              <div class="post-comments__content card__content">
            
                <ul class="comments">
                  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <img src="{{link_img('assets/images/samples/avatar-9.jpg')}}" alt="">
                          </figure>
                          <div class="comment__author-info">
                            <h5 class="comment__author-name">Jake Casspon</h5>
                            <time class="comment__post-date" datetime="2016-08-23">2 hours ago</time>
                          </div>
                        </div>
                        <div class="comment__reply">
                          <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
                  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <img src="{{link_img('assets/images/samples/avatar-10.jpg')}}" alt="">
                          </figure>
                          <div class="comment__author-info">
                            <h5 class="comment__author-name">Jennifer Stevens</h5>
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
                    <ul class="comments--children">
                      <li class="comments__item">
                        <div class="comments__inner">
                          <header class="comment__header">
                            <div class="comment__author">
                              <figure class="comment__author-avatar">
                                <img src="{{link_img('assets/images/samples/avatar-7.jpg')}}" alt="">
                              </figure>
                              <div class="comment__author-info">
                                <h5 class="comment__author-name">The Speedtester</h5>
                                <time class="comment__post-date" datetime="2016-08-23">3 hours ago</time>
                              </div>
                            </div>
                            <div class="comment__reply">
                              <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                            </div>
                          </header>
                          <div class="comment__body">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <img src="{{link_img('assets/images/samples/avatar-11.jpg')}}" alt="">
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
            
                <!-- Comments Pagination -->
                <nav aria-label="Comments Pavigation" class="post__comments-pagination {{$options}}">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">16</a></li>
                  </ul>
                </nav>
                <!-- Comments Pagination / End -->
            
              </div>
            </div>
            <!-- Post Comments / End -->
            

            <!-- Post Comment Form -->
            <div class="post-comment-form card card--lg">
              <header class="post-comment-form__header card__header">
                <h4>Ecrire un commentaire</h4>
              </header>
              <div class="post-comment-form__content card__content">
                <form action="#" class="comment-form">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="input-name">Name</label>
                        <input type="text" id="input-name" name="input-name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="input-email">Email</label>
                        <input type="email" id="input-email" name="input-email" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="textarea-comment">Your Comment</label>
                    <textarea name="textarea-comment" id="textarea-comment" rows="7" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-default btn-block btn-lg">Post Your Comment</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- Post Comment Form / End -->
            

          </div>
          <!-- Content / End -->

        </div>

      </div>
    </div>

@include('front.footer')