<!-- HEADER SECTION ************************************** -->
<div class="section" id="header">
  <div class="container">
    <!-- MAIN NAV -->
    <nav class="main-nav">
      <div class="main-nav__logo">
        <a href="/">
          <img alt="California Trade" src="{{ asset('img/california-logo.svg') }}">
        </a>
      </div>
      <div class="main-nav__nav mobile-hide">
        <ul>
          <li>
            <a href="{{ url('/') }}"{!! Request::is('/') ? ' class="active"' : '' !!}>Naslovnica</a>
          </li>
          <li>
            <a href="{{ url('/articles') }}"{!! Request::is('articles*') ? ' class="active"' : '' !!}>Asortiman</a>
          </li>
          <li>
            <a href="{{ url('/about') }}"{!! Request::is('about') ? ' class="active"' : '' !!}>O nama</a>
          </li>
          <li>
            <a href="{{ url('/partners') }}"{!! Request::is('partners') ? ' class="active"' : '' !!}>Partneri</a>
          </li>
          <li>
            <a href="{{ url('/contact') }}"{!! Request::is('contact') ? ' class="active"' : '' !!}>Kontakt</a>
          </li>
        </ul>
      </div>
      <div class="main-nav__m-open desktop-hide mobile-show">
        <svg height="100%" viewbox="0 0 28 17" width="100%" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 0c-2 1.444 0 2.889 0 2.889h26S29 1.444 27 0H1zm0 7c-2 1.444 0 2.889 0 2.889h26S29 8.444 27 7H1zm0 7c-2 1.444 0 2.889 0 2.889h26s2-1.445 0-2.889H1z" fill-rule="evenodd" fill="#BD3535"></path>
        </svg>
      </div>
    </nav>
    <div class="main-nav__mobile-wrap">
      <div class="main-nav__m-close">
        <svg height="100%" viewbox="0 0 24 24" width="100%" xmlns="http://www.w3.org/2000/svg">
          <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
        </svg>
      </div>
      <div class="main-nav__mobile-nav">
        <ul>
          <li>
            <a class="active" href="index.html">Naslovnica</a>
          </li>
          <li>
            <a href="articles.html">Asortiman</a>
          </li>
          <li>
            <a href="about.html">O nama</a>
          </li>
          <li>
            <a href="partners.html">Partneri</a>
          </li>
          <li>
            <a href="contact.html">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>