@extends('layout.base');

@section('title')
  California - Naslovnica
@endsection

@section('body')
  <!-- CONTENT - ARTICLES INFO SECTION ************************************** -->
  <div class="articles-info section" id="content">
    <div class="section-row">
      <div class="container">
        <!-- Article gallery -->
        <div class="article-gallery">
          <div class="article-gallery__main">
            <img src="{{ isset($article->data->images) && count($article->data->images) ? $article->data->images[0]->path : '' }}" alt="{{ $article->name }}">
          </div>
          <div class="article-gallery__list">
            @if (isset($article->data->images))
                @foreach ($article->data->images as $item)
            <img src="{{ $item->path }}" alt="{{ $article->name }}">
                @endforeach
            @endif
          </div>
        </div>
        <!-- Article specs -->
        <div class="article-specs">
          <div class="title-block title-block--left">
            <h1 class="title">{{ $article->name }} <span class="small">{!! $article->group_name !!}</span></h1>
          </div>
          <div class="specs-wrap">
            @if (isset($article->data->details))
                @foreach ($article->data->details as $item)
                <div class="specs">
                  <h3 class="specs__title">{{ $item->name }}</h3>
                  <div class="specs__table">
                    @foreach ($item->items as $subitem)
                    <div class="specs__row">
                      @if ($subitem->name)
                      <div class="specs__name">{{ $subitem->name }}:</div>
                      @endif
                      <div class="specs__desc">{{ $subitem->value }}</div>
                    </div>
                    @endforeach
                  </div>
                </div>
                @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection