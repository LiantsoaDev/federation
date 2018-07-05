
    <!-- Footer
    ================================================== -->
    <footer id="footer" class="footer">

      <!-- Footer Widgets -->
      <div class="footer-widgets">
        <div class="footer-widgets__inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-3">
                <div class="footer-col-inner">

                  <!-- Footer Logo -->
                  <div class="footer-logo">
                    <a href="index.html"><img src="{{asset('assets/images/'.$logo)}}" alt="féderation malagasy basketball" class="footer-logo__img"></a>
                  </div>
                  <!-- Footer Logo / End -->

                </div>
              </div>
              <div class="col-sm-4 col-md-3">
                <div class="footer-col-inner">
                  <!-- Widget: Contact Info -->
                  <div class="widget widget--footer widget-contact-info">
                    <h4 class="widget__title">Contact Info</h4>
                    <div class="widget__content">
                      <div class="widget-contact-info__desc">
                        <p>Fédération Malagasy du Basketball ou fmbb - 67ha Sud Immeuble Telma Shop<br>Antananarivo 101 - Madagascar</p>
                      </div>
                      <div class="widget-contact-info__body info-block">
                        <div class="info-block__item">
                          <svg role="img" class="df-icon df-icon--basketball">
                            <use xlink:href="{{asset('assets/images/icons-basket.svg')}}#basketball"/>
                          </svg>
                          <h6 class="info-block__heading">Contacter nous</h6>
                          <a class="info-block__link" href="mailto:{{$parameters->contact}}">{{$parameters->contact}}</a>
                        </div>
                        <div class="info-block__item">
                          <svg role="img" class="df-icon df-icon--jersey">
                            <use xlink:href="{{asset('assets/images/icons-basket.svg')}}#jersey"/>
                          </svg>
                          <h6 class="info-block__heading">Joignez notre équipe !</h6>
                          <a class="info-block__link" href="mailto:{{$parameters->email}}">{{$parameters->email}}</a>
                        </div>
                        <div class="info-block__item info-block__item--nopadding">
                          <ul class="social-links">
                            @foreach($parameters->media as $social)
                            @if( !is_null($social->link) )
                            <li class="social-links__item">
                              <a href="{{$social->link}}" class="social-links__link"><i class="fa fa-{{$social->libelle}}"></i> {{ucfirst($social->libelle)}}</a>
                            </li>
                            @endif
                            @endforeach
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Widget: Contact Info / End -->
                </div>
              </div>
              <div class="col-sm-4 col-md-3">
                <div class="footer-col-inner">
                  <!-- Widget: Popular Posts / End -->
                  <div class="widget widget--footer widget-popular-posts">
                    <h4 class="widget__title">Actualités à la Une</h4>
                    <div class="widget__content">
                      <ul class="posts posts--simple-list">
                        <li class="posts__item posts__item--category-2">
                          <div class="posts__cat">
                            <span class="label posts__cat-label">Compétition</span>
                          </div>
                          <h6 class="posts__title"><a href="#">Coupe du président 2018</a></h6>
                          <time datetime="2017-08-23" class="posts__date">08 Avril 2018</time>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__cat">
                            <span class="label posts__cat-label">Compétition</span>
                          </div>
                          <h6 class="posts__title"><a href="#">Tournoi FIBA 3x3 Challenge U18</a></h6>
                          <time datetime="2017-08-22" class="posts__date">08 Avril 2018</time>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <div class="posts__cat">
                            <span class="label posts__cat-label">Compétition</span>
                          </div>
                          <h6 class="posts__title"><a href="#">Final - Tournoi FIBA 3x3 Challenge U18</a></h6>
                          <time datetime="2017-08-21" class="posts__date">08 Avril 2018</time>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Widget: Popular Posts / End -->
                </div>
              </div>
              <div class="col-sm-4 col-md-3">
                <div class="footer-col-inner">

                  <!-- Widget: Instagram -->
                  <div class="widget widget--footer widget-instagram">
                    <h4 class="widget__title">Widget Facebook</h4>
                    <div class="widget__content">
                      <ul id="instagram-feed" class="widget-instagram__list"></ul>
                      <a href="https://www.facebook.com/OktoboneTechnology/" class="btn btn-sm btn-instagram btn-icon-right">Suivez nous sur Facebook <i class="icon-arrow-right"></i></a>
                    </div>
                  </div>
                  <!-- Widget: Instagram / End -->


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Widgets / End -->

      <!-- Footer Secondary -->
      <div class="footer-secondary footer-secondary--has-decor">
        <div class="container">
          <div class="footer-secondary__inner">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <ul class="footer-nav">
                  <li class="footer-nav__item"><a href="{{route('home')}}">Accueil</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Secondary / End -->
    </footer>
    <!-- Footer / End -->


    <!-- Login/Register Modal -->
    <div class="modal fade" id="modal-login-register" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg modal--login" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <div class="modal-account-holder">
              <div class="modal-account__item">

                <!-- Register Form -->
                <form action="#" class="modal-form">
                  <h5>Register Now!</h5>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Repeat your password...">
                  </div>
                  <div class="form-group form-group--submit">
                    <a href="shop-account.html" class="btn btn-primary btn-block">Create Your Account</a>
                  </div>
                  <div class="modal-form--note">You’ll receive a confirmation email in your inbox with a link to activate your account. </div>
                </form>
                <!-- Register Form / End -->

              </div>
              <div class="modal-account__item">

                <!-- Login Form -->
                <form action="#" class="modal-form">
                  <h5>Login to your account</h5>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password...">
                  </div>
                  <div class="form-group form-group--pass-reminder">
                    <label class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
                      <span class="checkbox-indicator"></span>
                    </label>
                    <a href="#">Forgot your password?</a>
                  </div>
                  <div class="form-group form-group--submit">
                    <a href="shop-account.html" class="btn btn-primary-inverse btn-block">Enter to your account</a>
                  </div>
                  <div class="modal-form--social">
                    <h6>or Login with your social profile:</h6>
                    <ul class="social-links social-links--btn text-center">
                      <li class="social-links__item">
                        <a href="#" class="social-links__link social-links__link--lg social-links__link--fb"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li class="social-links__item">
                        <a href="#" class="social-links__link social-links__link--lg social-links__link--twitter"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li class="social-links__item">
                        <a href="#" class="social-links__link social-links__link--lg social-links__link--gplus"><i class="fa fa-google-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </form>
                <!-- Login Form / End -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login/Register Modal / End -->


  </div>

  <!-- Javascript Files
  ================================================== -->
  <!-- Core JS -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core-min.js')}}"></script>
  <!-- Vendor JS -->
  <script src="{{asset('assets/vendor/twitter/jquery.twitter.js')}}"></script>
  <!-- Template JS -->
  <script src="{{asset('assets/js/init.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>

  </body>

</html>
