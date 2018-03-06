@extends('layout.base2')

@section('title')
  California - Asortiman
@endsection

@section('body')
  <!-- CONTENT - ARTICLES SECTION ************************************** -->
  <div class="articles vino section" id="content">
    <div class="container-jumbo">
      <div class="section-row vino">
        <div class="container">
          <div class="title-block title-block--center">
            <h1 class="title">Asortiman <span>kategorije</span></h1>
          </div>
        </div>
      </div>
      <div class="section-row">
        <div class="container">
          <div class="article-list category-list">
            
            
            <a class="article-item category-item" href="{{ url('articles/boce/boce-za-vino') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/glass-vino.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Boce za Vino</div>
            </a>
            
            
            <a class="article-item category-item" href="{{ url('articles/boce/boce-za-ulje') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-ulje.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Boce za Ulje</div>
            </a>
            <a class="article-item category-item" href="{{ url('articles/boce/boce-za-zestoko') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-zestoko.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Boce za Žestoka pića</div>
            </a>
            <a class="article-item category-item" href="{{ url('articles/boce/ukrasne-boce') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-ukrasne.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Ukrasne boce</div>
            </a>
            <a class="article-item category-item" href="{{ url('articles/cepovi') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-cepovi.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Čepovi</div>
            </a>
            <a class="article-item category-item" href="{{ url('articles/zatvaraci') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-poklopci.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Zatvarači</div>
            </a>
            <a class="article-item category-item" href="{{ url('articles/staklenke') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-staklenke.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Staklenke</div>
            </a>
            <a class="article-item category-item" href="{{ url('articles/pvc-kapice') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-pvc.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">PVC Kapice</div>
            </a>
            <a class="article-item category-item" href="{{ url('articles/kartonska-ambalaza') }}">
              <div class="article-item__overlay">
                <svg height="27px" version="1.1" viewbox="86 136 27 27" width="27px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd" fill="none" id="Page-1" stroke-width="1" stroke="none" transform="translate(87.000000, 137.000000)">
                    <path d="M18.0555542,15.8888877 L16.9144432,15.8888877 L16.5099992,15.498887 C17.9255539,13.8522213 18.7777764,11.7144429 18.7777764,9.38888807 C18.7777764,4.20333259 14.5744435,-2.59999979e-07 9.38888807,-2.59999979e-07 C4.20333259,-2.59999979e-07 -2.59999979e-07,4.20333259 -2.59999979e-07,9.38888807 C-2.59999979e-07,14.5744435 4.20333259,18.7777764 9.38888807,18.7777764 C11.7144429,18.7777764 13.8522213,17.9255539 15.498887,16.5099992 L15.8888877,16.9144432 L15.8888877,18.0555542 L23.1111095,25.2633311 L25.2633311,23.1111095 L18.0555542,15.8888877 Z M9.38888807,15.8888877 C5.79222193,15.8888877 2.88888846,12.9855541 2.88888846,9.38888807 C2.88888846,5.79222193 5.79222193,2.88888846 9.38888807,2.88888846 C12.9855541,2.88888846 15.8888877,5.79222193 15.8888877,9.38888807 C15.8888877,12.9855541 12.9855541,15.8888877 9.38888807,15.8888877 Z" fill="#FFFFFF" id="Fill-2"></path>
                  </g>
                </svg>
                <p>Pogledaj artikle</p>
              </div>
              <div class="article-item__img">
                <img alt="boca1" src="img/sections/index-karton.jpg">
              </div>
              <div class="redline"></div>
              <div class="article-item__title">Kartonska ambalaža</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection