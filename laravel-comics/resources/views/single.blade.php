@extends('layouts.app')

@section('main')
  <section>
    <div class="bg-blue container-fluid">
      <div class="container">
        <div class="thumb">
          <div class="content-thumb">
            <img src="{{ $comic['thumb'] }}" alt="thumb">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="description">
        <div class="info-description">
          <div class="content-left pt-30">
            <div class="title">
              <h1 class="upper">{{ $comic['title'] }}</h1>
            </div>
            <div class="banner">
              <div class="price">
                <span>U.S. Price: </span>
                <span>{{ $comic['price'] }}</span>
              </div>
              <div class="availability">
                <span>available</span>
                <span>Check Availability</span>
              </div>
            </div>
            <div class="description">
              <p>{{ $comic['description'] }}</p>
            </div>
          </div>
          <div class="content-right pl-20">
            <div class="advertisement">
              <h5 class="upper">Advertisement</h5>
              <div class="img-advertisement">
                <img src="/images/adv.jpg" alt="adv">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="info-comic">
        <div class="content-info-comic">
          <div class="left-info-comic">
            <h4>Talent</h4>
            <div class="specific-info">
              <div class="art-info">
                <p class="title">Art by:</p>
                @foreach ($comic['artists'] as $single)
                <span><a href="">{{$single}},</a></span>
                @endforeach
              </div>
              <div class="written-info">
                <p class="title">Written by:</p>
                @foreach ($comic['writers'] as $single)
                <span><a href="">{{$single}},</a></span>
                @endforeach
              </div>
            </div>
          </div>
          <div class="right-info-comic">
            <h4>Specs</h4>
            <div class="specific-info">
              <div class="series">
                <p class="title">Series:</p>
                <span><a href="">{{$comic['series']}}</a></span>
              </div>
              <div class="price">
                <p class="title">U.S. Price:</p>
                <span>{{$comic['price']}}</span>
              </div>
              <div class="date">
                <p class="title">On Sale Date:</p>
                <span>{{$comic['sale_date']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-comic">
        <div class="content-banner-comic">
          <div class="card-banner-comic">
            <span>Digital comics</span>
            <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
          </div>
          <div class="card-banner-comic">
            <span>Shop DC</span>
            <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
          </div>
          <div class="card-banner-comic">
            <span>Comic shop locator</span>
            <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
          </div>
          <div class="card-banner-comic">
            <span>Subscriptions</span>
            <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


<!-- Descrizione
Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout:
create un file di layout in cui inserire la struttura comune di tutte
le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer
tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file
inserito nella cartella config e abbellite il tutto sfruttando Sass. -->
