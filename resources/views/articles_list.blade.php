@extends('layout.base')

@section('title')
  California - Naslovnica
@endsection

@section('body')
  <!-- CONTENT - ARTICLES SECTION ************************************** -->
  <div class="articles vino section" id="content">
    <div class="container-jumbo">
      <!-- Staklo -->
      <div class="section-row glass glass--left">
        <div class="glass__img img-{{ $group->key }}"></div>
        <div class="glass__box">
          {!! $group->description !!}
        </div>
      </div>
      <!-- Vino -->
      <div class="section-row vino">
        <div class="container">
          <div class="title-block title-block--center">
            <h1 class="title">{!! $group->title !!}</h1>
          </div>
          <div class="selector">
            <div class="selector__text">
              {!! $group->menu_title !!}
            </div>
            <nav class="selector__nav">
              <ul>
                @foreach ($subsubgroups as $item)
                <li>
                  <a href="#{{ $item->key }}">{!! $item->name !!}</a>
                </li>
                @endforeach
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
      
      @foreach ($subsubgroups as $item)
      <!-- {{ $item->key }} -->
      <div class="section-row" id="{{ $item->key }}">
        <div class="container">
          <div class="title-block title-block--left">
            <h1 class="title">{!! $item->name !!}</h1>
          </div>
          <div class="article-list">
            @foreach ($item->articles as $article_item)
            <a class="article-item" href="{{ url('article/' . $group->key . '/' . $article_item->key) }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Vidi detalje</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="{{ asset('images/articles/' . $article_item->key . '.jpg') }}">
              </div>
              <div class="article-item__title">{!! $article_item->name !!}</div>
              <div class="redline"></div>
              <div class="article-item__desc">{!! $article_item->description !!}</div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection