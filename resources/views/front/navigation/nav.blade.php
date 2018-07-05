<nav class="main-nav clearfix">
              <ul class="main-nav__list">
                <li class="active"><a href="{{route('home')}}">Accueil</a>
                </li>
                <li class=""><a href="#">FMBB</a>
                  <div class="main-nav__megamenu clearfix">
                    <ul class="col-lg-4 col-md-3 col-xs-12 main-nav__ul">
                      <li class="main-nav__title">La FMBB</li>
                      <li><a href="{{route('front.presentation.fmbb')}}">Présentation générale</a></li>
                      <li><a href="{{route('front.missions-attributions')}}">Missions et attributions</a></li>
                      <li><a href="{{route('front.reglement-interieur')}}">Réglements interieurs</a></li>
                      <li><a href="{{route('front.programme.activite')}}">Les Programmes d'activités</a></li>
                      <li><a href="features-404.html">Les licenciés</a></li>
                      <li><a href="features-404.html">Partenaires officiels</a></li>
                      <li><a href="features-404.html">Réglements unifiés des compétitions nationales</a></li>
                      <li><a href="features-404.html">Les palmarès</a></li>
                    </ul>
                    <ul class="col-lg-4 col-md-3 col-xs-12 main-nav__ul">
                      <li class="main-nav__title">Nos dirigeants </li>
                      <li><a href="team-overview.html">Les comités executifs</a></li>
                      <li><a href="team-roster-2.html">Les comités techniques</a></li>
                      <li><a href="team-roster-2.html">Les dirigeants par régions</a></li>
                    </ul>
                    
                    <div class="col-lg-4 col-md-3 col-xs-12">
                      <ul class="posts posts--simple-list main-nav__ul">
                        <li class="main-nav__title">Notre communauté </li>
                        <li><a href="team-overview.html">Les comités executifs</a></li>
                        <li><a href="team-roster-2.html">Les comités techniques</a></li>
                        <li><a href="team-roster-2.html">Les dirigeants par régions</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""><a href="#">N1A</a>
                  <ul class="main-nav__sub">
                    <li><a href="team-overview.html">Overview</a></li>
                    <li><a href="team-roster-2.html">Roster</a>
                      <ul class="main-nav__sub-2">
                        <li><a href="team-roster-1.html">Roster - 1</a></li>
                        <li><a href="team-roster-2.html">Roster - 2</a></li>
                      </ul>
                    </li>
                    <li><a href="team-standings.html">Standings</a></li>
                    <li><a href="team-last-results.html">Latest Results</a></li>
                    <li><a href="team-schedule.html">Schedule</a></li>
                    <li><a href="team-gallery.html">Gallery</a>
                      <ul class="main-nav__sub-2">
                        <li><a href="team-gallery-album.html">Single Album</a></li>
                      </ul>
                    </li>
                    <li><a href="player-overview.html">Player Pages</a>
                      <ul class="main-nav__sub-2">
                        <li><a href="player-overview.html">Overview</a></li>
                        <li><a href="player-stats.html">Full Statistics</a></li>
                        <li><a href="player-bio.html">Biography</a></li>
                        <li><a href="player-news.html">Related News</a></li>
                        <li><a href="player-gallery.html">Gallery</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class=""><a href="#">FIBA 3x3</a>
                  <ul class="main-nav__sub">
                    <li><a href="blog-1.html">News - version 1</a></li>
                    <li><a href="blog-2.html">News - version 2</a></li>
                    <li><a href="blog-3.html">News - version 3</a></li>
                    <li><a href="blog-4.html">News - version 4</a></li>
                    <li><a href="#">Post</a>
                      <ul class="main-nav__sub-2">
                        <li><a href="blog-post-1.html">Single Post - version 1</a></li>
                        <li><a href="blog-post-2.html">Single Post - version 2</a></li>
                        <li><a href="blog-post-3.html">Single Post - version 3</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class=""><a href="shop-grid.html">Compétitions</a>
                  <ul class="main-nav__sub">
                    <li><a href="shop-grid.html">Shop - Grid</a></li>
                    <li><a href="shop-list.html">Shop - List</a></li>
                    <li><a href="shop-fullwidth.html">Shop - Full Width</a></li>
                    <li><a href="shop-product.html">Single Product</a></li>
                    <li><a href="shop-cart.html">Shopping Cart</a></li>
                    <li><a href="shop-checkout.html">Checkout</a></li>
                    <li><a href="shop-wishlist.html">Wishlist</a></li>
                    <li><a href="shop-login.html">Login</a></li>
                    <li><a href="shop-account.html">Account</a></li>
                  </ul>
                </li>
                <li class=""><a href="shop-grid.html">Shop</a>
                  <ul class="main-nav__sub">
                    <li><a href="shop-grid.html">Shop - Grid</a></li>
                    <li><a href="shop-list.html">Shop - List</a></li>
                    <li><a href="shop-fullwidth.html">Shop - Full Width</a></li>
                    <li><a href="shop-product.html">Single Product</a></li>
                    <li><a href="shop-cart.html">Shopping Cart</a></li>
                    <li><a href="shop-checkout.html">Checkout</a></li>
                    <li><a href="shop-wishlist.html">Wishlist</a></li>
                    <li><a href="shop-login.html">Login</a></li>
                    <li><a href="shop-account.html">Account</a></li>
                  </ul>
                </li>
              </ul>

              <!-- Social Links -->
              <ul class="social-links social-links--inline social-links--main-nav">
                @foreach($parameters->media as $social)
                  @if(!is_null($social->link))
                    <li class="social-links__item">
                      <a href="{{$social->link}}" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="{{$social->libelle}}"><i class="fa fa-{{$social->libelle}}"></i></a>
                    </li>
                  @endif
                @endforeach
              </ul>
              <!-- Social Links / End -->

              <!-- Pushy Panel Toggle -->
              <a href="#" class="pushy-panel__toggle">
                <span class="pushy-panel__line"></span>
              </a>
              <!-- Pushy Panel Toggle / Eng -->
            </nav>