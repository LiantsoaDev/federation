<!DOCTYPE html>
<html lang="zxx">

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <title>{{$seo->siteName}}</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="{{$seo->tags}}">
  <meta name="description" content="{{$seo->description}}" />

  <!-- Schema.org meta for Google+ -->
  <meta itemprop="name" content="{{$seo->titre}}">
  <meta itemprop="description" content="{{$seo->description}}">
  <meta itemprop="image" content="{{$seo->image}}">
  <link rel="author" href="{{$seo->authorGoogleplusUrl}}" />
  <link rel="publisher" href="{{$seo->publisherGoogleplusUrl}}" />

  <!-- Twitter Card meta -->
  <meta name="twitter:card" content="{{$seo->twitterCard}}">
  <meta name="twitter:site" content="{{$seo->twitterSite}}">
  <meta name="twitter:title" content="{{$seo->titre}}">
  <meta name="twitter:description" content="{{$seo->twitterDescription}}">
  <meta name="twitter:creator" content="{{$seo->twitterCreator}}">
  <meta name="twitter:url" content="{{$seo->twitterUrl}}" />
  <meta name="twitter:domain" content="{{$seo->twitterDomain}}" />
  <!-- Twitter summary card with large image must be at least 280x150px -->
  <meta name="twitter:image:src" content="{{$seo->image}}">

  <!-- Open Graph meta -->
  <meta property="og:title" content="{{$seo->titre}}" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="{{$seo->twitterUrl}}" />
  <meta property="og:image" content="{{$seo->image}}" />
  <meta property="og:description" content="{{$seo->twitterDescription}}" />
  <meta property="og:site_name" content="{{$seo->siteName}}" />
  <meta property="article:published_time" content="{{$seo->publishedTime}}" />
  <meta property="article:modified_time" content="{{$seo->modifiedTime}}" />
  <meta property="fb:admins" content="{{$seo->fbnumericId}}" />
  <meta property="fb:app_id" content="{{$seo->fbnumericAppId}}" />
  <meta property="author" content="Author" />
  <meta property="article:author" content="{{$seo->fbUrlProfile}}" />
  <meta property="article:publisher" content="{{$seo->fbUrlPage}}" />

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="{{ $parameters->favicon }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/images/favicons/favicon-120.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/favicons/favicon-152.png')}}">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

  <!-- Google Web Fonts
  ================================================== -->
  <link href="../../fonts.googleapis.com/css295c.css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">

  <!-- CSS
  ================================================== -->
  <!-- Preloader CSS -->
  <link href="{{asset('assets/css/preloader.css')}}" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fonts/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/slick/slick.css')}}" rel="stylesheet">

  <!-- Template CSS-->
  <link href="{{asset('assets/css/content.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/components.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- Custom CSS-->
  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

</head>
<body class="template-basketball">

  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



    <!-- Header
    ================================================== -->

    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
      <div class="header-mobile__logo">
        <a href="index.html"><img src="{{link_img('assets/images/logo.png')}}" srcset="{{asset('assets/images/logo@2x.png')}} 2x" alt="Alchemists" class="header-mobile__logo-img"></a>
      </div>
      <div class="header-mobile__inner">
        <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
        <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
      </div>
    </div>

    <!-- Header Desktop -->
    <header class="header">

      <!-- Header Top Bar -->
      <div class="header__top-bar clearfix hide">
        <div class="container">

          <!-- Account Navigation -->
          <ul class="nav-account">
            <li class="nav-account__item"><a href="#" data-toggle="modal" data-target="#modal-login-register">Your Account</a></li>
            <li class="nav-account__item nav-account__item--wishlist"><a href="shop-wishlist.html">Wishlist <span class="highlight">8</span></a></li>
            <li class="nav-account__item"><a href="#">Currency: <span class="highlight">USD</span></a>
              <ul class="main-nav__sub">
                <li><a href="#">USD</a></li>
                <li><a href="#">EUR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>
            <li class="nav-account__item"><a href="#">Language: <span class="highlight">EN</span></a>
              <ul class="main-nav__sub">
                <li><a href="#">English</a></li>
                <li><a href="#">Spanish</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>
            <li class="nav-account__item nav-account__item--logout"><a href="#">Logout</a></li>
          </ul>
          <!-- Account Navigation / End -->

        </div>
      </div>
      <!-- Header Top Bar / End -->

      <!-- Header Secondary -->
      <div class="header__secondary">
        <div class="container">
          <!-- Header Search Form -->
          <div class="header-search-form">
            <form action="#" id="mobile-search-form" class="search-form">
              <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your seach here...">
              <button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <!-- Header Search Form / End -->
          <ul class="info-block info-block--header">
            <li class="info-block__item info-block__item--contact-primary">
              <svg role="img" class="df-icon df-icon--jersey">
                <use xlink:href="{{asset('assets/images/icons-basket.svg')}}#jersey"/>
              </svg>
              <h6 class="info-block__heading">Joignez notre équipe!</h6>
              <a class="info-block__link" href="mailto:managing-tana@moov.mg">managing-tana@moov.mg</a>
            </li>
            <li class="info-block__item info-block__item--contact-secondary">
              <svg role="img" class="df-icon df-icon--basketball">
                <use xlink:href="{{asset('assets/images/icons-basket.svg')}}#basketball"/>
              </svg>
              <h6 class="info-block__heading">Contacter nous</h6>
              <a class="info-block__link" href="mailto:contact@oktobone.com">contact@oktobone.com</a>
            </li>
            <li class="info-block__item info-block__item--shopping-cart hide">
              <a href="#" class="info-block__link-wrapper">
                <div class="df-icon-stack df-icon-stack--bag">
                  <svg role="img" class="df-icon df-icon--bag">
                    <use xlink:href="assets/images/icons-basket.svg#bag"/>
                  </svg>
                  <svg role="img" class="df-icon df-icon--bag-handle">
                    <use xlink:href="assets/images/icons-basket.svg#bag-handle"/>
                  </svg>
                </div>
                <h6 class="info-block__heading">Your Bag (8 items)</h6>
                <span class="info-block__cart-sum">$256,30</span>
              </a>

              <!-- Dropdown Shopping Cart -->
              <ul class="header-cart">
                <li class="header-cart__item">
                  <figure class="header-cart__product-thumb">
                    <a href="shop-product.html">
                      <img src="{{link_img('assets/images/samples/cart-sm-1.jpg')}}" alt="">
                    </a>
                  </figure>
                  <div class="header-cart__inner">
                    <span class="header-cart__product-cat">Sneakers</span>
                    <h5 class="header-cart__product-name"><a href="shop-product.html">Sundown Sneaker</a></h5>
                    <div class="header-cart__product-ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star empty"></i>
                    </div>
                    <div class="header-cart__product-sum">
                      <span class="header-cart__product-price">$28.00</span> x <span class="header-cart__product-count">2</span>
                    </div>
                    <div class="fa fa-times header-cart__close"></div>
                  </div>
                </li>
                <li class="header-cart__item">
                  <figure class="header-cart__product-thumb">
                    <a href="shop-product.html">
                      <img src="{{link_img('assets/images/samples/cart-sm-2.jpg')}}" alt="">
                    </a>
                  </figure>
                  <div class="header-cart__inner">
                    <span class="header-cart__product-cat">Sneakers</span>
                    <h5 class="header-cart__product-name"><a href="shop-product.html">Atlantik Sneaker</a></h5>
                    <div class="header-cart__product-ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="header-cart__product-sum">
                      <span class="header-cart__product-price">$30.00</span> x <span class="header-cart__product-count">4</span>
                    </div>
                    <div class="fa fa-times header-cart__close"></div>
                  </div>
                </li>
                <li class="header-cart__item">
                  <figure class="header-cart__product-thumb">
                    <a href="shop-product.html">
                      <img src="{{asset('assets/images/samples/cart-sm-3.jpg')}}" alt="">
                    </a>
                  </figure>
                  <div class="header-cart__inner">
                    <span class="header-cart__product-cat">Sneakers</span>
                    <h5 class="header-cart__product-name"><a href="shop-product.html">Aquarium Sneaker</a></h5>
                    <div class="header-cart__product-ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star empty"></i>
                      <i class="fa fa-star empty"></i>
                    </div>
                    <div class="header-cart__product-sum">
                      <span class="header-cart__product-price">$26.00</span> x <span class="header-cart__product-count">1</span>
                    </div>
                    <div class="fa fa-times header-cart__close"></div>
                  </div>
                </li>
                <li class="header-cart__item header-cart__item--subtotal">
                  <span class="header-cart__subtotal">Cart Subtotal</span>
                  <span class="header-cart__subtotal-sum">$282.00</span>
                </li>
                <li class="header-cart__item header-cart__item--action">
                  <a href="shop-cart.html" class="btn btn-default btn-block">Go to Cart</a>
                  <a href="shop-checkout.html" class="btn btn-primary-inverse btn-block">Checkout</a>
                </li>
              </ul>
              <!-- Dropdown Shopping Cart / End -->

            </li>
          </ul>
        </div>
      </div>
      <!-- Header Secondary / End -->

      <!-- Header Primary -->
      <div class="header__primary">
        <div class="container">
          <div class="header__primary-inner">
            <!-- Header Logo -->
            <div class="header-logo">
              <a href="{{route('home')}}"><img src="{{asset('assets/images/'.$logo)}}" alt="féderation malagasy du basketball" class="header-logo__img"></a>
            </div>
            <!-- Header Logo / End -->

           <!-- Main Navigation -->
            @include('front.navigation.nav')
            <!-- Main Navigation / End -->
           
          </div>
        </div>
      </div>
      <!-- Header Primary / End -->

    </header>
    <!-- Header / End -->
