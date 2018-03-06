@extends('layout.base3')

@section('title')
  California - Kontakt
@endsection

@section('body')
  <!-- CONTENT - CONTACT SECTION ************************************** -->
  <div class="contact section" id="content">
    <div class="container-jumbo">
      <!-- Contact -->
      <div class="section-row">
        <div class="container">
          <div class="title-block title-block--left">
            <h1 class="title">Kontakt</h1>
          </div>
          <div class="contacts-wrap">
            <div class="contacts-col">
              <div class="contacts-box">
                <div class="contacts-box__title">
                  ADRESA
                </div>
                <div class="redline"></div>
                <div class="contacts-box__text">
                  California Trade d.o.o.
                  <br>
                  TTTS, Put Vrbovnika bb
                  <br>
                  21311 Stobreč
                  <br>
                  Hrvatska
                </div>
              </div>
              <div class="contacts-box">
                <div class="contacts-box__title">
                  TELEFON/FAX
                </div>
                <div class="redline"></div>
                <div class="contacts-box__text">
                  TEL    021 32 66 53
                  <br>
                  FAX   021 32 63 72
                </div>
              </div>
              <div class="contacts-box">
                <div class="contacts-box__title">
                  MOBITEL
                </div>
                <div class="redline"></div>
                <div class="contacts-box__text">
                  098 26 46 16
                </div>
              </div>
              <div class="contacts-box">
                <div class="contacts-box__title">
                  EMAIL
                </div>
                <div class="redline"></div>
                <div class="contacts-box__text">
                  california-trade@st.t-com.hr
                </div>
              </div>
            </div>
            <div class="contacts-col">
              <div class="contacts-box">
                <div class="contacts-box__title">
                  RADNO VRIJEME
                </div>
                <div class="redline"></div>
                <div class="contacts-box__text">
                  <span>PONEDJELJAK - PETAK</span>
                  <br>
                  07:00 - 15:00
                  <br>
                  <br>
                  SUBOTA
                  <br>
                  Ne radimo
                  <br>
                  <br>
                  NEDJELJA
                  <br>
                  Ne radimo
                </div>
              </div>
              <div class="contacts-box">
                <div class="contacts-box__title">
                  MATIČNI PODATCI
                </div>
                <div class="redline"></div>
                <div class="contacts-box__text">
                  OIB : 31522836079
                  <br>
                  IBAN : HR1423600001101656181
                  <br>
                  SWIFT - ZABA HR 2X
                  <br>
                  FAX   021 32 63 72
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MAP SECTION ************************************** -->
  <div class="section" id="google-map">
    <script>
      function initMap() {
        var uluru = {lat: 43.518136, lng: 16.532670};
        var map = new google.maps.Map(document.getElementById('google-map'), {
          zoom: 18,
          scrollwheel: false,
          navigationControl: false,
          mapTypeControl: false,
          scaleControl: false,
          draggable: false,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async="" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXlQeBAAEd0J0DwpJy0-Z1vP8lZr0DTeM&amp;callback=initMap"></script>
  </div>
@endsection