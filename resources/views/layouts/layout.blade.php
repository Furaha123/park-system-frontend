<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css"
      rel="stylesheet"
    />
</head>
<body>
   <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">
          <i class="ri-steering-line"></i>
          ParkSmart
        </a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">About</a>
            </li>
            <li class="nav__item">
              <a href="#popular" class="nav__link">Popular</a>
            </li>
            <li class="nav__item">
              <a href="#featured" class="nav__link">Featured</a>
            </li>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
          </div>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line"></i>
        </div>
      </nav>
    </header>
    
    <div>
        @yield('content')
    </div>
   <footer class="footer section">
      <div class="shape shape__big"></div>
      <div class="shape shape__small"></div>
      <div class="footer__container container grid">
        <div class="footer__content">
          <a href="#" class="footer__logo">
            <i class="ri-steering-line"></i>ParkSmart
          </a>
          <p class="footer__description">
            Lets help you to protect your car <br />
            with our system
          </p>
        </div>
        <div class="footer__content">
          <h3 class="footer__title">Park Smart System</h3>
          <ul class="footer__list active-link">
            <li>
              <a href="#" class="footer__link">About</a>
            </li>
            <li>
              <a href="#" class="footer__link">symbols</a>
            </li>
            <li>
              <a href="#" class="footer__link">History</a>
            </li>
            <li>
              <a href="#" class="footer__link">Subcribe</a>
            </li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Information</h3>
          <ul class="footer__list">
            <li>
              <a href="#" class="footer__link">Request checkout </a>
            </li>
            <li>
              <a href="#" class="footer__link">Report problem</a>
            </li>
            <li>
              <a href="#" class="footer__link">Contact Us</a>
            </li>
            <li>
              <a href="#" class="footer__link">Services</a>
            </li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Follow Us</h3>
          <ul class="footer__social">
            <a
              href="https://www.facebook.com/"
              target="_blank"
              class="footer__social-link"
            >
              <i class="ri-facebook-fill"></i>
            </a>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="footer__social-link"
              ><i class="ri-instagram-fill"></i>
            </a>
            <a
              href="https://www.twitter.com/"
              target="_blank"
              class="footer__social-link"
            >
              <i class="ri-twitter-line"></i
            ></a>
          </ul>
        </div>
      </div>
      <span class="footer__copy">
        &copy; 2023 MosesDev. All rights reserved
      </span>
    </footer>
    <a href="#" class="scrollUp" id="scroll-up">
      <i class="ri-arrow-up-line"></i>
    </a>
  
</body>
</html>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mixitup@3"></script>
    <script src="{{url( 'javascript/main.js')}}"></script>