@extends('front.layouts.app')

@section('content')
	
	  <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="page-heading__title">Programme d'activité : Saison <span class="highlight">2017-2018</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="{{route('home')}}">Accueil</a></li>
              <li class="active">Programme d'activité 2017 - 2018</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
	
	

    <!-- Player Pages Filter -->
    <nav class="content-filter">
      <div class="container">
        <a href="#" class="content-filter__toggle"></a>
        <ul class="content-filter__list">
          <li class="content-filter__item content-filter__item--active"><a href="player-overview.html" class="content-filter__link"><small>Player</small>Overview</a></li>
          <li class="content-filter__item "><a href="player-stats.html" class="content-filter__link"><small>Player</small>Full Statistics</a></li>
          <li class="content-filter__item "><a href="player-bio.html" class="content-filter__link"><small>Player</small>Biography</a></li>
          <li class="content-filter__item "><a href="player-news.html" class="content-filter__link"><small>Player</small>Related News</a></li>
          <li class="content-filter__item "><a href="player-gallery.html" class="content-filter__link"><small>Player</small>Gallery</a></li>
        </ul>
      </div>
    </nav>
    <!-- Player Pages Filter / End -->

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <div class="row">

          <!-- Content -->
          <div class="content col-md-8">

            <!-- Last Game Log -->
            <div class="card card--has-table">
              <div class="card__header card__header--has-btn">
                <h4>Last Games Log</h4>
                <a href="player-stats.html" class="btn btn-default btn-outline btn-xs card-header__button">See complete games log</a>
              </div>
              <div class="card__content">
                <div class="table-responsive">
                  <table class="table table-hover game-player-result">
                    <thead>
                      <tr>
                        <th class="game-player-result__date">Date</th>
                        <th class="game-player-result__vs">Versus</th>
                        <th class="game-player-result__score">Score</th>
                        <th class="game-player-result__min">Min</th>
                        <th class="game-player-result__reb">REB</th>
                        <th class="game-player-result__ast">AST</th>
                        <th class="game-player-result__blk">BLK</th>
                        <th class="game-player-result__stl">STL</th>
                        <th class="game-player-result__pf">PF</th>
                        <th class="game-player-result__to">TO</th>
                        <th class="game-player-result__pts">PTS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="game-player-result__date">Saturday, Mar 24</td>
                        <td class="game-player-result__vs">
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/images/samples/logos/sharks_shield.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Sharks</h6>
                              <span class="team-meta__place">Marine College</span>
                            </div>
                          </div>
                        </td>
                        <td class="game-player-result__score"><span class="game-player-result__game">W</span> 107-102</td>
                        <td class="game-player-result__min">22</td>
                        <td class="game-player-result__reb">3</td>
                        <td class="game-player-result__ast">1</td>
                        <td class="game-player-result__blk">1</td>
                        <td class="game-player-result__stl">2</td>
                        <td class="game-player-result__pf">0</td>
                        <td class="game-player-result__to">2</td>
                        <td class="game-player-result__pts">11</td>
                      </tr>
                      <tr>
                        <td class="game-player-result__date">Friday, Mar 16</td>
                        <td class="game-player-result__vs">
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/images/samples/logos/pirates_shield.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">L.A Pirates</h6>
                              <span class="team-meta__place">Bebop Institute</span>
                            </div>
                          </div>
                        </td>
                        <td class="game-player-result__score"><span class="game-player-result__game">L</span> 124-106</td>
                        <td class="game-player-result__min">22</td>
                        <td class="game-player-result__reb">1</td>
                        <td class="game-player-result__ast">5</td>
                        <td class="game-player-result__blk">0</td>
                        <td class="game-player-result__stl">4</td>
                        <td class="game-player-result__pf">2</td>
                        <td class="game-player-result__to">3</td>
                        <td class="game-player-result__pts">14</td>
                      </tr>
                      <tr>
                        <td class="game-player-result__date">Saturday, Mar 10</td>
                        <td class="game-player-result__vs">
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/images/samples/logos/lucky_clovers_shield.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Lucky Clovers</h6>
                              <span class="team-meta__place">St. Patrick’s Institute</span>
                            </div>
                          </div>
                        </td>
                        <td class="game-player-result__score"><span class="game-player-result__game">L</span> 95-98</td>
                        <td class="game-player-result__min">11</td>
                        <td class="game-player-result__reb">4</td>
                        <td class="game-player-result__ast">2</td>
                        <td class="game-player-result__blk">0</td>
                        <td class="game-player-result__stl">3</td>
                        <td class="game-player-result__pf">5</td>
                        <td class="game-player-result__to">6</td>
                        <td class="game-player-result__pts">10</td>
                      </tr>
                      <tr>
                        <td class="game-player-result__date">Friday, Mar 4</td>
                        <td class="game-player-result__vs">
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/images/samples/logos/ocean_kings_shield.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Ocean Kings</h6>
                              <span class="team-meta__place">Bay College</span>
                            </div>
                          </div>
                        </td>
                        <td class="game-player-result__score"><span class="game-player-result__game">L</span> 110-104</td>
                        <td class="game-player-result__min">14</td>
                        <td class="game-player-result__reb">3</td>
                        <td class="game-player-result__ast">5</td>
                        <td class="game-player-result__blk">2</td>
                        <td class="game-player-result__stl">0</td>
                        <td class="game-player-result__pf">1</td>
                        <td class="game-player-result__to">4</td>
                        <td class="game-player-result__pts">8</td>
                      </tr>
                      <tr>
                        <td class="game-player-result__date">Saturday, Feb 29</td>
                        <td class="game-player-result__vs">
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/images/samples/logos/red_wings_shield.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Red Wings</h6>
                              <span class="team-meta__place">Icarus College</span>
                            </div>
                          </div>
                        </td>
                        <td class="game-player-result__score"><span class="game-player-result__game">W</span> 102-97</td>
                        <td class="game-player-result__min">27</td>
                        <td class="game-player-result__reb">1</td>
                        <td class="game-player-result__ast">1</td>
                        <td class="game-player-result__blk">1</td>
                        <td class="game-player-result__stl">1</td>
                        <td class="game-player-result__pf">4</td>
                        <td class="game-player-result__to">5</td>
                        <td class="game-player-result__pts">12</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Last Game Log / End -->

            <!-- Lates News -->
            <div class="card card--clean">
              <header class="card__header card__header--has-btn">
                <h4>Player Related News</h4>
                <a href="blog-1.html" class="btn btn-default btn-outline btn-xs card-header__button">See All Related News</a>
              </header>
              <div class="card__content">

                <!-- Posts Grid -->
                <div class="posts posts--cards post-grid post-grid--2cols post-grid--fitRows row">

                  <div class="post-grid__item col-xs-6">
                    <div class="posts__item posts__item--card posts__item--category-1 card">
                      <figure class="posts__thumb">
                        <div class="posts__cat">
                          <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img4.jpg" alt=""></a>
                      </figure>
                      <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                        <h6 class="posts__title"><a href="#">The Planetrotters will perform this May 4th at Madison Cube</a></h6>
                        <div class="posts__excerpt">
                          Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                        </div>
                      </div>
                      <footer class="posts__footer card__footer">
                        <div class="post-author">
                          <figure class="post-author__avatar">
                            <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                          </figure>
                          <div class="post-author__info">
                            <h4 class="post-author__name">James Spiegel</h4>
                          </div>
                        </div>
                        <ul class="post__meta meta">
                          <li class="meta__item meta__item--views">2369</li>
                          <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                          <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                      </footer>
                    </div>
                  </div>

                  <div class="post-grid__item col-xs-6">
                    <div class="posts__item posts__item--card posts__item--category-1 card">
                      <figure class="posts__thumb">
                        <div class="posts__cat">
                          <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img3.jpg" alt=""></a>
                      </figure>
                      <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                        <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                        <div class="posts__excerpt">
                          Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                        </div>
                      </div>
                      <footer class="posts__footer card__footer">
                        <div class="post-author">
                          <figure class="post-author__avatar">
                            <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                          </figure>
                          <div class="post-author__info">
                            <h4 class="post-author__name">Jessica Hoops</h4>
                          </div>
                        </div>
                        <ul class="post__meta meta">
                          <li class="meta__item meta__item--views">2369</li>
                          <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                          <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                      </footer>
                    </div>
                  </div>

                  <div class="post-grid__item col-xs-6">
                    <div class="posts__item posts__item--card posts__item--category-1 card">
                      <figure class="posts__thumb">
                        <div class="posts__cat">
                          <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img8.jpg" alt=""></a>
                      </figure>
                      <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                        <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                        <div class="posts__excerpt">
                          Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                        </div>
                      </div>
                      <footer class="posts__footer card__footer">
                        <div class="post-author">
                          <figure class="post-author__avatar">
                            <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                          </figure>
                          <div class="post-author__info">
                            <h4 class="post-author__name">James Spiegel</h4>
                          </div>
                        </div>
                        <ul class="post__meta meta">
                          <li class="meta__item meta__item--views">2369</li>
                          <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                          <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                      </footer>
                    </div>
                  </div>

                  <div class="post-grid__item col-xs-6">
                    <div class="posts__item posts__item--card posts__item--category-1 card">
                      <figure class="posts__thumb">
                        <div class="posts__cat">
                          <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img2.jpg" alt=""></a>
                      </figure>
                      <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                        <h6 class="posts__title"><a href="#">Cheerleader tryouts will start next Friday at 5pm</a></h6>
                        <div class="posts__excerpt">
                          Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                        </div>
                      </div>
                      <footer class="posts__footer card__footer">
                        <div class="post-author">
                          <figure class="post-author__avatar">
                            <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                          </figure>
                          <div class="post-author__info">
                            <h4 class="post-author__name">James Spiegel</h4>
                          </div>
                        </div>
                        <ul class="post__meta meta">
                          <li class="meta__item meta__item--views">2369</li>
                          <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                          <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                      </footer>
                    </div>
                  </div>

                </div>
                <!-- Post Grid / End -->

              </div>
            </div>
            <!-- Lates News / End -->

          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          <div class="sidebar col-md-4">

            <!-- Widget: Social Buttons -->
            <aside class="widget widget--sidebar widget-social">
              <a href="#" class="btn-social-counter btn-social-counter--fb" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-facebook"></i>
                </div>
                <h6 class="btn-social-counter__title">James's Facebook Page</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Likes</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
              <a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-twitter"></i>
                </div>
                <h6 class="btn-social-counter__title">James's Twitter Account</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
            </aside>
            <!-- Widget: Social Buttons / End -->
            

            <!-- Widget: Featured Player - Alternative without Image -->
            <aside class="widget card widget--sidebar widget-player widget-player--alt">
              <div class="widget__title card__header">
                <h4>Player Main Stats</h4>
              </div>
              <div class="widget__content-secondary">
            
                <!-- Player Details -->
                <div class="widget-player__details">
            
                  <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">2 Points</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">1250</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">3 Points</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">680</span>
                      </div>
                    </div>
                  </div>
            
                  <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Rebounds</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">234</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Assists</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">751</span>
                      </div>
                    </div>
                  </div>
            
                  <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Steals</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">472</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Blocks</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">565</span>
                      </div>
                    </div>
                  </div>
            
                  <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Fouls</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">97</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Game Played</span>
                          <span class="widget-player__details-desc">In his career</span>
                        </span>
                        <span class="widget-player__details-value">104</span>
                      </div>
                    </div>
                  </div>
            
                </div>
                <!-- Player Details / End -->
            
              </div>
            
              <div class="widget__content-tertiary widget__content--bottom-decor">
                <div class="widget__content-inner">
                  <div class="widget-player__stats row">
                    <div class="col-xs-4">
                      <div class="widget-player__stat-item">
                        <div class="widget-player__stat-circular circular">
                          <div class="circular__bar" data-percent="88">
                            <span class="circular__percents">88<small>%</small></span>
                          </div>
                          <span class="circular__label">Shot<br> Accuracy</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-4">
                      <div class="widget-player__stat-item">
                        <div class="widget-player__stat-circular circular">
                          <div class="circular__bar" data-percent="63">
                            <span class="circular__percents">63<small>%</small></span>
                          </div>
                          <span class="circular__label">Pass<br> Accuracy</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-4">
                      <div class="widget-player__stat-item">
                        <div class="widget-player__stat-circular circular">
                          <div class="circular__bar" data-percent="75.5">
                            <span class="circular__percents">75.5<small>%</small></span>
                          </div>
                          <span class="circular__label">Total<br> Efficiency</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- Widget: Featured Player - Alternative without Image / End -->
            

            <!-- Widget: Player Newslog -->
            <aside class="widget card widget--sidebar widget-newslog">
              <div class="widget__title card__header">
                <h4>Player Newslog</h4>
              </div>
              <div class="widget__content card__content">
                <ul class="newslog">
                  <li class="newslog__item newslog__item--injury">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli’s</strong> knee fracture is healing properly and will be returning to the field <strong>next week</strong>. </div>
                      <time class="newslog__date" datetime="2016-01-19">January 19, 2016</time>
                    </div>
                  </li>
                  <li class="newslog__item newslog__item--injury">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli</strong> has a knee fracture and he’s gonna be out of the play for <strong>4 months</strong>.</div>
                      <time class="newslog__date" datetime="2016-09-26">September 26, 2016</time>
                    </div>
                  </li>
                  <li class="newslog__item newslog__item--join">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli</strong> is now the <strong>1st Shooting Guard</strong> after being 3rd Shooting Guard for the past year.</div>
                      <time class="newslog__date" datetime="2016-09-06">September 6, 2016</time>
                    </div>
                  </li>
                  <li class="newslog__item newslog__item--injury">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli</strong> has an abductor strain so he will miss the next game against the LA Pirates.</div>
                      <time class="newslog__date" datetime="2016-03-04">March 4, 2016</time>
                    </div>
                  </li>
                  <li class="newslog__item newslog__item--injury">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli</strong> has an abductor strain so he will miss the next game against the LA Pirates.</div>
                      <time class="newslog__date" datetime="2016-03-04">March 4, 2016</time>
                    </div>
                  </li>
                  <li class="newslog__item newslog__item--award">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli</strong> won the <strong>Player of the Year 2014 Award</strong> for the first time.</div>
                      <time class="newslog__date" datetime="2015-08-17">August 17, 2015</time>
                    </div>
                  </li>
                  <li class="newslog__item newslog__item--injury">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli</strong> has a lower back contusion and will miss the next two games.</div>
                      <time class="newslog__date" datetime="2015-08-05">August 5, 2015</time>
                    </div>
                  </li>
                  <li class="newslog__item newslog__item--join">
                    <div class="newslog__item-inner">
                      <div class="newslog__content"><strong>James Girobilli</strong> has joined the team after playing for the California Surfers for a year.</div>
                      <time class="newslog__date" datetime="2013-06-19">June 19, 2013</time>
                    </div>
                  </li>
                </ul>
              </div>
            </aside>
            <!-- Widget: Player Newslog / End -->
            

          </div>
          <!-- Sidebar / End -->
        </div>

      </div>
    </div>

    <!-- Content / End -->
@endsection