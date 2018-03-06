<!-- ARTICLE NAV SECTION ************************************** -->
<div class="section" id="article-bar">
  <div class="container">
    <nav class="article-nav mobile-hide">
      <ul>
        @foreach ($article_groups as $item)
        <li{!! $item->dropdown ? ' class="dropdown"' : '' !!}>{!! $item->dropdown ? $item->name : ('<a href="' . url('articles/' . $item->key) . '">' . $item->name . '</a>') !!}</a></li>
        @if ($item->dropdown)
        <ul class="dropdown-list">
         @foreach ($item->subgroups as $subitem)
          <li>
            <a href="{{ url('articles/' . $item->key . '/' . $subitem->key) }}">{!! $subitem->name !!}</a>
          </li>
          @endforeach
        </ul>
        @endif
        @endforeach
      </ul>
    </nav>
    <div class="article-nav-mobile">
      <div class="article-nav-mobile__text">
        Asortiman Kategorije
      </div>
      <div class="article-nav__m-open">
        <svg height="100%" viewbox="0 0 28 17" width="100%" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 0c-2 1.444 0 2.889 0 2.889h26S29 1.444 27 0H1zm0 7c-2 1.444 0 2.889 0 2.889h26S29 8.444 27 7H1zm0 7c-2 1.444 0 2.889 0 2.889h26s2-1.445 0-2.889H1z" fill-rule="evenodd" fill="#BD3535"></path>
        </svg>
      </div>
    </div>
    <div class="article-nav__mobile-wrap">
      <div class="article-nav__m-close">
        <svg height="100%" viewbox="0 0 24 24" width="100%" xmlns="http://www.w3.org/2000/svg">
          <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
        </svg>
      </div>
      <div class="article-nav__mobile-nav">
        <ul>
        @foreach ($article_groups as $item)
          @if (!$item->dropdown)
          <li><a href="{{ url('articles/' . $item->key) }}">{!! $item->name !!}</a></li>
          @else
             @foreach ($item->subgroups as $subitem)
              <li>
                <a href="{{ url('articles/' . $item->key . '/' . $subitem->key) }}">{!! $subitem->name !!}</a>
              </li>
              @endforeach
      @endif
        @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>